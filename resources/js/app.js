require('./bootstrap');

$(document).ready(function() {
    $('#example').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.11.2/i18n/es-cl.json"
        }
    } );
} );