<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
      data-sidebar-image="none">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Compra y Venta' }}</title>

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

    {{-- Archivos generados con Vite (Laravel Breeze) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
        <div class="bg-overlay"></div>

        <div class="shape">
            @include('svgs.shape')
        </div>
    </div>

    <!-- Contenido de la página de autenticación -->
    <div class="auth-page-content">
        <div class="container">

            <!-- Logo y descripción -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mt-sm-5 mb-4 text-white-50">
                        <div>
                            <a href="{{ url('/') }}" class="d-inline-block auth-logo">
                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo MercadoPlus"
                                     height="45">
                            </a>
                        </div>
                        <p class="mt-3 fs-15 fw-medium">
                            Sistema de Compras, Ventas e Inventarios — <strong>MercadoPlus</strong>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contenido principal del login -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card mt-4">

                        <div class="card-body p-4">

                            <div class="text-center mt-2">
                                <h5 class="text-primary">¡Bienvenido de nuevo!</h5>
                                <p class="text-muted">Inicia sesión para continuar en <strong>MercadoPlus</strong>.</p>
                            </div>

                            <div class="p-2 mt-4">

                                {{-- Formulario de login --}}
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo electrónico</label>
                                        <input type="email"
                                               id="email"
                                               name="email"
                                               value="{{ old('email') }}"
                                               class="form-control @error('email') is-invalid @enderror"
                                               placeholder="Introduce tu correo"
                                               required
                                               autofocus>
                                        @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="{{ route('password.request') }}" class="text-muted">¿Olvidaste tu
                                                contraseña?</a>
                                        </div>
                                        <label class="form-label" for="password">Contraseña</label>

                                        <div class="position-relative auth-pass-inputgroup mb-3">
                                            <input type="password"
                                                   name="password"
                                                   class="form-control pe-5 @error('password') is-invalid @enderror"
                                                   id="password"
                                                   placeholder="Introduce tu contraseña"
                                                   required>

                                            <button type="button"
                                                    class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted"
                                                    id="password-addon">
                                                <i class="ri-eye-fill align-middle"></i>
                                            </button>
                                        </div>

                                        @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-check mb-3">
                                        <input class="form-check-input"
                                               type="checkbox"
                                               name="remember"
                                               id="remember">
                                        <label class="form-check-label" for="remember">Recordarme</label>
                                    </div>

                                    <!-- Submit -->
                                    <div class="mt-4">
                                        <button class="btn btn-success w-100" type="submit">
                                            Iniciar sesión
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0 text-muted">&copy;
                            <script>document.write(new Date().getFullYear())</script>
                            Velzon. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->

{{-- Bootstrap --}}
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- Scroll personalizado --}}
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

{{-- Efectos Waves --}}
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

{{-- Iconos Feather --}}
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

{{-- Lord Icon (animaciones) --}}
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>

{{-- Script principal del template --}}
<script src="{{ asset('assets/js/plugins.js') }}"></script>

{{-- Partículas (efecto visual del login) --}}
<script src="{{ asset('assets/libs/particles.js/particles.js') }}"></script>
<script src="{{ asset('assets/js/pages/particles.app.js') }}"></script>

{{-- Mostrar/Ocultar contraseña --}}
<script src="{{ asset('assets/js/project-js.js') }}"></script>

{{-- Archivos de Vite (Laravel Breeze) --}}
@vite(['resources/js/app.js'])

</body>

</html>
