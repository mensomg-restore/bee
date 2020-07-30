require('./bootstrap');
require('./libs/DataTables/jquery.dataTables.min')
require('./core/source/App.js')

$(document).ready(function () {
    $('.date-picker').datepicker({autoclose: true, todayHighlight: true});

    $('.datatable1').DataTable({
        "dom": 'lCfrtip',
        "order": [],
        "colVis": {
            "buttonText": "Columns",
            "overlayFade": 0,
            "align": "right"
        },
        "language": {
            "lengthMenu": '_MENU_ кол-во на страницу',
            "search": '<i class="fa fa-search"></i>',
            "zeroRecords": "Результаты не найдены",
            "infoEmpty": "Сейчас тут пусто",
            "info": "Показана _PAGE_ из _PAGES_",
            "paginate": {
                "previous": '<i class="fa fa-angle-left"></i>',
                "next": '<i class="fa fa-angle-right"></i>'
            }
        }
    });

    $('#orders').DataTable({
        "dom": 'lCfrtip',
        "order": [[0, "desc"]],
        "colVis": {
            "buttonText": "Columns",
            "overlayFade": 0,
            "align": "right"
        },
        "language": {
            "lengthMenu": '_MENU_ кол-во на страницу',
            "search": '<i class="fa fa-search"></i>',
            "zeroRecords": "Результаты не найдены",
            "infoEmpty": "Сейчас тут пусто",
            "info": "Показана _PAGE_ из _PAGES_",
            "paginate": {
                "previous": '<i class="fa fa-angle-left"></i>',
                "next": '<i class="fa fa-angle-right"></i>'
            }
        }
    });

    $('.order-table').DataTable({
        "dom": 'lCfrtip',
        "order": [],
        "bLengthChange": false,
        "info": false,
        "paginate": false,
        "colVis": {
            "buttonText": "Columns",
            "overlayFade": 0,
            "align": "right"
        },
        "language": {
            "search": '<i class="fa fa-search"></i>',
            "zeroRecords": "Результаты не найдены",
            "infoEmpty": "Сейчас тут пусто",
        }
    });

    $('#datatable1').DataTable({
        "dom": 'lCfrtip',
        "order": [],
        "colVis": {
            "buttonText": "Columns",
            "overlayFade": 0,
            "align": "right"
        },
        "language": {
            "lengthMenu": '_MENU_ кол-во на страницу',
            "search": '<i class="fa fa-search"></i>',
            "zeroRecords": "Результаты не найдены",
            "infoEmpty": "Сейчас тут пусто",
            "info": "Показана _PAGE_ из _PAGES_",
            "paginate": {
                "previous": '<i class="fa fa-angle-left"></i>',
                "next": '<i class="fa fa-angle-right"></i>'
            }
        }
    });
    $('#datatable1 tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });
    $('.datatable1 tbody').on('click', 'tr', function () {
        $(this).toggleClass('selected');
    });

    $(".select2-list").select2({
        allowClear: true
    });

    $('.nestable-list').nestable();

    var table = $('#datatable2').DataTable({
        "dom": 'T<"clear">lfrtip',
        // "ajax": $('#datatable2').data('source'),
        "columns": [
            {
                "class": 'details-control',
                "orderable": false,
                "data": null,
                "defaultContent": ''
            },
            {"data": "№"},
            {"data": "Статус"},
            {"data": "Товар"},
            {"data": "Стоимость"},
            {"data": "Кол-во"},
            {"data": "Итог"},
            {"data": "Поставщик"},
            {"data": "Ссылка на сайте"}
        ],
        "order": [[1, 'asc']],
        "language": {
            "lengthMenu": '_MENU_ кол-во на страницу',
            "search": '<i class="fa fa-search"></i>',
            "zeroRecords": "Результаты не найдены",
            "infoEmpty": "Сейчас тут пусто",
            "info": "Показана _PAGE_ из _PAGES_",
            "paginate": {
                "previous": '<i class="fa fa-angle-left"></i>',
                "next": '<i class="fa fa-angle-right"></i>'
            }
        }
    });

});
