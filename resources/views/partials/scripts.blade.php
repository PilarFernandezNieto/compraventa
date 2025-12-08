<!-- JAVASCRIPT -->
<!-- jQuery obligatorio para DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables extras -->
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>

{{-- Inicialización de Datatables --}}
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>

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
<script src="{{ asset('assets/js/app.js') }}"></script>

{{-- Archivos de Vite (Laravel Breeze) --}}
@vite(['resources/js/app.js'])
