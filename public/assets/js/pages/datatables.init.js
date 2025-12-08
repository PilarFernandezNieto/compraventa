// Inicialización general de DataTables en diferentes tablas
document.addEventListener("DOMContentLoaded", function () {


    $(document).ready(function () {
        if (!$.fn.DataTable.isDataTable('#tablaCategorias')) {
            $('#tablaCategorias').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    url: "/assets/datatables/spanish.json"
                },
                columnDefs: [
                    { width: "5%", targets: 0 },   // check
                    { width: "5%", targets: 1 },  // Id
                    { width: "70%", targets: 2 },  // Nombre
                    { width: "20%", targets: 3 },  // Acciones

                ]


            });
        }
    });


    // Scroll vertical
    new DataTable("#scroll-vertical", {
        scrollY: "210px",
        scrollCollapse: true,
        paging: false,
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    // Scroll horizontal
    new DataTable("#scroll-horizontal", {
        scrollX: true,
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    // Paginación alternativa
    new DataTable("#alternative-pagination", {
        pagingType: "full_numbers",
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    // Tabla con cabecera fija
    new DataTable("#fixed-header", {
        fixedHeader: true,
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    // Tabla con botones (copiar, csv, excel, pdf, imprimir)
    new DataTable("#buttons-datatables", {
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "print", "pdf"],
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    // Tabla AJAX
    new DataTable("#ajax-datatables", {
        ajax: "/assets/json/datatable.json",
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    // DataTable con modo responsive y modal
    new DataTable("#model-datatables", {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (row) {
                        const data = row.data();
                        return "Detalles de " + data[0] + " " + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: "table"
                })
            }
        },
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

});


// ===============================
//   TABLA DINÁMICA: AÑADIR FILAS
// ===============================
$(document).ready(function () {

    let tabla = $("#add-rows").DataTable({
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });

    let contador = 1;

    $("#addRow").on("click", function () {
        tabla.row.add([
            contador + ".1",
            contador + ".2",
            contador + ".3",
            contador + ".4",
            contador + ".5",
            contador + ".6",
            contador + ".7",
            contador + ".8",
            contador + ".9",
            contador + ".10",
            contador + ".11",
            contador + ".12",
        ]).draw(false);

        contador++;
    });

    // Añadir 1 fila al cargar
    $("#addRow").click();

});


// Tabla simple: #example
$(document).ready(function () {
    $("#example").DataTable({
        language: {
            url: "/assets/datatables/spanish.json"
        }
    });
});
