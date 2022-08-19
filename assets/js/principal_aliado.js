principalAliado = {
    init: function () {
        principalAliado.getCanchasAliado();
        principalAliado.events();
    },

    //Eventos de la ventana.
    events: function () {
         $('#tabla_canchas').on('click', 'a.btn_editar_cancha', principalAliado.onClickShowModalDet);
        // $('#tablaDetalleResCanchasAliado').on('click', 'a.ver-det', principalAliado.onClickShowModalDet);
    },

    getCanchasAliado: function () {
        $.post(base_url + '/PrincipalAliado/c_traerCanchasAliados',
                {
                    // clave: 'valor' // parametros que se envian
                },
                function (data) {
                    const obj = JSON.parse(data);

                    console.log(obj.canchas)
                    principalAliado.printTableCanchasAliado(obj.canchas);
                });
    },

    printTableCanchasAliado: function (data) {
        ///lleno la tabla con los valores enviados
        principalAliado.tabla_pendientes = $('#tabla_canchas').DataTable(principalAliado.configTableDefault(data, [
                {title: "Empresa", data: "empresa"},
                {title: "Local", data: "local"},
                {title: "Dirección", data: "direccion"},
                {title: "Contacto", data: "telefono"},
                {title: "Nro Canchas", data: "numero_canchas"},
                {title: "Barrio", data: "barrio"},
                {title: "opc", data: principalAliado.getButtons},
            ]));
    },
    
    // Función que permite pintar la tabla con los campos de busqueda
    // Los parametros son: Data que recibe los datos, columns: los números de columns en la tabla, IdTabke: Es el id de la tabla a pintar
    // ordenColumn:posicion para organizar las columnas y el ordenBy: la informacion se va a organizar de forma ascendente
    configTableSearchColumn: function(data, columns, idTable, ordenColumn, ordenBy = "asc", numeric = 0) {

        return {
            initComplete: function() {
                $('#' + idTable + ' tfoot th').each(function() {
                    $(this).html('<input type="text" placeholder="Buscar" />');
                });
                var r = $('#' + idTable + ' tfoot tr');
                r.find('th').each(function() {
                    $(this).css('padding', 8);
                });
                $('#' + idTable + ' thead').append(r);
                $('#search_0').css('text-align', 'center');

                // DataTable
                var table = $('#' + idTable).DataTable();

                // Apply the search
                table.columns().every(function() {
                    var that = this;

                    $('input', this.footer()).on('keyup change', function() {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            },
            data: data,
            columns: columns,
            "language": {
                "url": base_url + "/assets/plugins/datatables/lang/es.json"
            },
            dom: 'Blfrtip',
            buttons: [
                {
                    text: 'Excel <span class="fa fa-file-excel-o"></span>',
                    className: 'btn-cami_cool',
                    extend: 'excel',
                    title: 'ZOLID EXCEL',
                    filename: 'zolid ' 
                },
                {
                    text: 'Imprimir <span class="fa fa-print"></span>',
                    className: 'btn-cami_cool',
                    extend: 'print',
                    title: 'Reporte Zolid',
                }
            ],
            select: true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ordering: true,
            columnDefs: [{
                    // targets: -1,
                    // visible: false,
                    defaultContent: "",
                    // targets: -1,
                    orderable: false,
                }],

            // si no se envia la columna ni la direccion de ordenamiento se ordenará como viene por defecto los datos de la consulta
            order: (ordenColumn == '' && ordenBy == '') ? [] : [[ordenColumn, ordenBy]],

            "aoColumnDefs": [
                {"sType": "numeric", "aTargets": [numeric]}
            ],

        }
    },

    configTableDefault: function(data, columns) {
        return {
            data: data,
            columns: columns,
            "language": {
                "url": base_url + "/assets/plugins/datatables/lang/es.json"
            },
            dom: 'Blfrtip',
            buttons: [
                {
                    text: '<i class="far fa-file-excel"></i>',
                    className: 'btn btn-success',
                    extend: 'excel',
                    title: 'BSW | Dashboard',
                    filename: 'BSW | Dashboard ' 
                },
                {
                    extend: 'copy',
                    text: '<i class="far fa-clone"></i>',
                    title: 'BSW | Dashboard',
                    className: 'btn btn-default',
                    exportOptions: {
                        modifier: {
                            page: 'current'
                        }
                    }
                },
                {
                    text: '<i class="far fa-file-pdf"></i>',
                    extend: 'pdfHtml5',
                    title: 'BSW | Dashboard' ,
                    filename: 'BSW | Dashboard',
                    className: 'btn btn-default',
                },
                {
                    text: '<i class="fas fa-print"></i>',
                    extend: 'print',
                    title: 'BSW | Dashboard' ,
                    filename: 'BSW | Dashboard',
                    className: 'btn btn-default',
                },
                {
                    text: 'Ocultar Columna',
                    extend: 'colvis',
                    title: 'BSW | Dashboard' ,
                    filename: 'BSW | Dashboard',
                },

                // "pdf", 
                //"print", 
                //"colvis"
                ],
            select: true,
            ordering: true,

        }
    },

    getButtons: function (obj) {
        boton = '<div class="btn-group">'
                + '<a class="btn btn-outline-info btn-block btn-xs btn_editar_cancha" title="Editar Cancha"><i class="fas fa-edit"></i></a>'
                + '</div>';
        return boton;
    },


};
principalAliado.init();