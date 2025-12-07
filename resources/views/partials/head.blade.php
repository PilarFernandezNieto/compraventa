<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sistema de Gestión de Compras, Ventas e Inventarios">
<meta name="author" content="Pilar">
{{-- Favicon --}}
<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
{{-- Configuración del layout (JS) --}}
<script src="{{ asset('assets/js/layout.js') }}"></script>
{{-- Bootstrap CSS --}}
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
{{-- Iconos --}}
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">
{{-- CSS principal del template --}}
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">
{{-- CSS personalizado --}}
<link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/estilos.css') }}" rel="stylesheet">
{{-- Archivos generados con Vite (Laravel Breeze) --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])

