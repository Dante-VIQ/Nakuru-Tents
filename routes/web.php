<?php

use App\Livewire\ShowBlog;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Admin\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/rent', function () {
    return view('rent');
})->name('rent');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/gallery-single', function () {
    return view('gallery-single');
})->name('gallery-single');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/booknow', function () {
    return view('booknow');
})->name('booknow');

// Route::get('blog/{blog}', ShowBlog::class)->name('blog-single');

// Contact routes
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
// Route::get('/gallery/{slug}', [GalleryController::class, 'show'])->name('gallery.show');

Route::middleware(['auth', 'role:master|engineer'])->group(function () {
    Route::get('/Admin/user/roles/index', [UserRoleController::class, 'index'])->name('admin.user.roles.index');
    Route::post('/Admin/roles/{user}', [UserRoleController::class, 'update'])->name('admin.roles.update');

    Route::get('Admin/index', [AdminController::class, 'index'])->name('Admin.index');
    Route::resource('admin/rooms', RoomController::class);

    Route::resource('admin/services', ServiceController::class);
    Route::resource('admin/blogs', BlogController::class);
    Route::get('/admin/testimonials', [TestimonialController::class])->name('admin.testimonials');
    Route::post('/admin/testimonial/{id}/approve', function ($id) {
        $t = \App\Models\Testimonial::findOrFail($id);
        $t->approved = true;
        $t->save();

        return back()->with('success', 'Testimonial approved');
    })->name('admin.approve.testimonial');

    Route::get('/Admin/bookings', function () {
        return view('Admin/bookings');
    })->name('Admin/bookings');

    Route::resource('admin/products', ProductController::class);

    // Status update route
    Route::post('admin/products/{product}/status', [ProductController::class, 'updateStatus'])->name('products.update-status');

    Route::resource('admin/gallery', GalleryController::class);

    // Status update route
    Route::post('admin/gallery/{gallery}/status', [GalleryController::class, 'updateStatus'])->name('gallery.update-status');
});

// Route::middleware('role:master|admin|engineer')->group(function () {
//     Route::resource('rooms', RoomController::class)->only(['index', 'show']);
// });

require __DIR__ . '/auth.php';
