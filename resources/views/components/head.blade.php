<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="view-transition" content="same-origin">

<title>Gaitegi - {{$slot}}</title>

<meta name="description" content="Gaitegi - {{__('home')}}">
<meta name="author" content="Gaitegi">
<meta name="robots" content="index, follow">
<meta name="keywords" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

@livewireScripts

@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif