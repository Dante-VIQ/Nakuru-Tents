<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $gallery->title }} - Nakuru Tents & Canvas Gallery</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <style>
        .image-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1rem;
        }

        .image-item {
            position: relative;
            overflow: hidden;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .image-item img {
            transition: transform 0.5s ease;
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .image-item:hover img {
            transform: scale(1.05);
        }

        .image-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
            color: white;
            padding: 1rem;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .image-item:hover .image-overlay {
            transform: translateY(0);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Header -->
    @include('layouts.navigation')

    <!-- Gallery Details -->
    <section class="py-8">

        <livewire:show-gallery :gallery-slug="$gallery->slug" />
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-[#2a6b4e] rounded-lg flex items-center justify-center">
                            <i class="fas fa-mountain-sun"></i>
                        </div>
                        <span class="text-xl font-bold">Nakuru Tents & Canvas</span>
                    </div>
                    <p class="text-gray-400 mt-2">Premium outdoor solutions since 2010</p>
                </div>

                <div class="flex space-x-6">
                    <a href="{{ route('dashboard') }}" class="text-gray-400 hover:text-white">Home</a>
                    <a href="{{ route('gallery.index') }}" class="text-white">Gallery</a>
                    <a href="{{ route('products.index') }}" class="text-gray-400 hover:text-white">Products</a>
                    <a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400 text-sm">
                <p>© {{ date('Y') }} Nakuru Tents & Canvas. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Lightbox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <script>
        // Lightbox options
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'showImageNumberLabel': true,
            'albumLabel': 'Image %1 of %2'
        });
    </script>
</body>

</html>
