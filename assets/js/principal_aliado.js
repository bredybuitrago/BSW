principalAliado = {
    init: function () {
        principalAliado.getCanchasAliado();
        principalAliado.events();
    },

    //Eventos de la ventana.
    events: function () {
        $('#tabla_canchas').on('click', 'a.btn_editar_cancha', principalAliado.onClickShowModalEdit);
    },

    getCanchasAliado: function () {
        $.post(base_url + '/PrincipalAliado/c_traerCanchasAliados',
                {
                    // clave: 'valor' // parametros que se envian
                },
                function (data) {
                    const obj = JSON.parse(data);
                    principalAliado.printTableCanchasAliado(obj.canchas);
                });
    },

    printTableCanchasAliado: function (data) {
        ///lleno la tabla con los valores enviados
        principalAliado.tabla_pendientes = $('#tabla_canchas').DataTable(principalAliado.configTableDefault(data, [
                {title: "Empresa", data: "empresa"},
                {title: "Local", data: "local"},
                {title: "Dirección", data: "direccion"},
                {title: "Barrio", data: "barrio"},
                {title: "Cancha", data: "cancha"},
                {title: "Tipo", data: "tipo_cancha"},
                {title: "tarifa", data: principalAliado.setFormatMoneyTable},
                {title: "Observación", data: "observacion"},
                {title: "Activa", data: principalAliado.setCheckEstadoCanchaTable},
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
        let boton = '<div class="btn-group">'
                + '<a class="btn btn-outline-info btn-block btn-xs btn_editar_cancha" title="Editar Cancha"><i class="fas fa-edit"></i></a>'
                + '</div>';
        return boton;
    },

    setCheckEstadoCanchaTable: function(obj){
        let check = ''

        if (obj.activa == "1") {
            check = `<i class="fas fa-check text-success"></i>`;
        } else {
            check = `<i class="fas fa-times text-danger"></i>`;
        }


        return check;
    },

    setFormatMoneyTable: function(obj){
        return (obj.tarifa * 1).toLocaleString("es-CO", {style: "currency",currency: "COP"});
    },

    onClickShowModalEdit:function () {
        principalAliado.limpiarFormulario();

        var aLinkLog = $(this);
        var trParent = aLinkLog.parents('tr');
        var record = tabla_cont_out.row(trParent).data();
        
        principalAliado.fillFormModal(record);
    },


    limpiarFormulario: function(){
        $('#title_modal').html('');
        $('#txt_identificacion').val('');
        $('#ddl_tipo_cancha').val('');
        $('#txt_tarifa_por_hora').val('');
        $('#txt_observaciones').val('');
        $('cancha_activa').attr('checked', true);
    },



    onClickShowModalDet: function () {
            document.getElementById("formModal_detalle").reset();
            $('#title_modal').html('');
            var aLinkLog = $(this);
            var trParent = aLinkLog.parents('tr');
            var record = tabla_cont_out.row(trParent).data();
            fTiempos.fillFormModal(record);
    },

    fillFormModal: function (registros) {
        $.post(baseurl + '/OtHija/c_fillmodals',
                {
                    idOth: registros.id_orden_trabajo_hija // parametros que se envian
                },
                function (data) {
                   $.each(data, function (i, item) {
                        $('#mdl_' + i).val(item);
                    }); 
                });
        $('#title_modal').html('<b>Detalle de la orden  ' + registros.id_orden_trabajo_hija + '</b>');
        $('#Modal_detalle').modal('show');
    },



};
principalAliado.init();