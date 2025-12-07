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




<script src="{{ asset('assets/js/app.js') }}"></script>

{{-- Archivos de Vite (Laravel Breeze) --}}
@vite(['resources/js/app.js'])
