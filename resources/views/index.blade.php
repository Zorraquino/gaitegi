<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css'])
        @endif
    </head>
    <body class="font-sans antialiased relative min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">

        <main class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

            <header class="w-full bg-white sticky flex items-center justify-between px-4 py-2 shadow-md rounded-full backdrop-blur">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto">
                </div>
                <nav>
                    <ul class="flex space-x-4">
                        <li><a href="/es/" class="text-gray-800 hover:text-blue-600">Español</a></li>
                        <li><a href="/en/" class="text-gray-800 hover:text-blue-600">English</a></li>
                    </ul>
                </nav>
            </header>

            <div class="pt-16">
                <div class="text-center text-5xl">{{ __('title') }}</div>
                <form id="formulario--contacto" action="/send-email" method="POST" class="mt-8 space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" value="John Doe" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="johndoe@example.com" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">Hello, this is a test message.</textarea>
                    </div>
                    <div>
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700">
                            Send Email
                        </button>
                    </div>
                </form>
            </div>
        </main>

        <footer class="py-16 text-center text-sm text-black dark:text-white/70">
            
        </footer>

       @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/js/app.js'])
        @endif 
    </body>
</html>
