<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="view-transition" content="same-origin">

<title>Gaitegi - {{$slot}}</title>

<meta name="description" content="Gaitegi - {{$slot}}">
<meta name="author" content="Gaitegi">
<meta name="robots" content="index, follow">
@if (request()->is('es/modulos'))
    <link rel="canonical" href="{{ url('oficinas') }}" />
@elseif (request()->is('eu/moduloak'))
    <link rel="canonical" href="{{ url('bulegoak') }}" />
@else
    <link rel="canonical" href="{{ url()->current() }}" />
@endif
<meta name="keywords" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

@livewireScripts

@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@endif