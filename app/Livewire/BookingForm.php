<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\Booking;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class BookingForm extends Component
{
    public $full_name, $phone, $notes;
    public $product_id;
    public $quantity = 1;
    public $showForm = false;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1|max:100',
        'notes' => 'nullable|string|max:1000',
    ];

    public function mount()
    {
        $this->showForm = false;
    }

    // Add methods to show/hide modal
    public function showForm()
    {
        $this->showForm = true;
    }

    public function closeForm()
    {
        $this->showForm = false;
        $this->reset(); // Optional: clear form when closing
    }

    public function save()
    {
        Log::info('Order submission started', $this->all());

        try {
            $validated = $this->validate();
            Log::info('Validation passed', $validated);

            // Get product details
            $product = Product::findOrFail($validated['product_id']);
            
            // Check stock availability (if you have inventory)
            if (isset($product->stock_quantity) && $product->stock_quantity < $validated['quantity']) {
                $this->addError('quantity', 'Insufficient stock. Only ' . $product->stock_quantity . ' items available.');
                Log::warning('Insufficient stock', [
                    'requested' => $validated['quantity'],
                    'available' => $product->stock_quantity
                ]);
                return;
            }

            // Calculate total price
            $totalPrice = $product->price * $validated['quantity'];
            
            // Save order
            $booking = Booking::create([
                'full_name' => $validated['full_name'],
                'phone' => $validated['phone'],
                'product_id' => $validated['product_id'],
                'quantity' => $validated['quantity'],
                'total_price' => $totalPrice,
                'notes' => $validated['notes'],
                'status' => 'pending',
                'order_number' => 'ORD-' . strtoupper(uniqid())
            ]);

            Log::info('Order created successfully', [
                'order_id' => $booking->id,
                'order_number' => $booking->order_number
            ]);

            // Send email notification
            try {
                Mail::to('damalide20@gmail.com')->queue(new \App\Mail\NewBookingMail($booking, $product));

                // Optional: Send confirmation to customer if you have email field
                // Mail::to($this->email)->queue(new \App\Mail\OrderConfirmationMail($booking, $product));
            } catch (\Exception $e) {
                Log::error('Email failed: ' . $e->getMessage());
            }

            session()->flash('message', 'Order submitted successfully! Your order number is ' . $booking->order_number . '. We will contact you shortly.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::error('Validation failed', ['errors' => $e->errors()]);
            throw $e;
        } catch (\Exception $e) {
            Log::error('Order failed: ' . $e->getMessage());
            session()->flash('error', 'There was an error submitting your order. Please try again.');
        }
    }

    public function incrementQuantity()
{
    $this->quantity++;
}

public function decrementQuantity()
{
    if ($this->quantity > 1) {
        $this->quantity--;
    }
}

    public function render()
    {
        return view('livewire.booking-form', [
            'products' => Product::where('is_active', true)->orderBy('name')->get()
        ]);
    }
}