<!-- JAVASCRIPT -->

{{-- jQuery debe ir primero --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

{{-- Bootstrap --}}
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

{{-- Scroll personalizado --}}
<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>

{{-- Efectos Waves --}}
<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>

{{-- Iconos Feather --}}
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>

{{-- Lord Icon --}}
<script src="{{ asset('assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>

{{-- Script principal --}}
<script src="{{ asset('assets/js/plugins.js') }}"></script>

<!-- Datatables -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

{{-- Inicialización de Datatables --}}
<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#tabla').DataTable({
            responsive: true,
            autoWidth: false,
            language: {
                url: "{{ asset('datatables/spanish.json') }}"
            }
        });
    });
</script>


{{-- Archivos Vite --}}
@vite(['resources/js/app.js'])
