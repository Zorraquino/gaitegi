<footer class="py-16 text-center text-sm text-black dark:text-white/70">
    not transitioned content
</footer>

@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/js/app.js'])
@endif