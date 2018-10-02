$(document).ready(function () {
    $('#contenido').load('view/eventos.html');
});

function agragarRestaurantes(agregar) {
    $(document).ready(function () {
        $('#contenido').load('view/' + agregar + '.html');
    });
}

