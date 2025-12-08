<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Sistema de Gestión de Compras, Ventas e Inventarios">
<meta name="author" content="Pilar">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

<!-- Bootstrap CSS -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">

<!-- Iconos -->
<link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">

<!-- CSS principal -->
<link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet">

<!-- CSS personalizado -->
<link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/estilos.css') }}" rel="stylesheet">

<!-- Datatables CSS (Bootstrap 5) -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

<!-- Vite -->
@vite(['resources/css/app.css'])

