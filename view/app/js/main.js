/*--------------------------BUSCAR--------------------------------------------*/
$(document).ready(function () {

    $('#main').load('view/pro.html');
    $('#nav').load('view/overall/nav.php');
    /*$.ajax({
        url: 'view/overall/nav.php',
        dataType: 'text',
        success: function (data) {
            $('#header').html('view/overall/nav.php');
        },
        error: function () {
            alert("error");
        }
    });*/
    
   
        hashChange();
        $(window).on("hashchange", function () {
            hashChange();
        });
    
});
function hashChange() {

    let myURL = 'pro.html';

    if (window.location.hash) {
        switch (window.location.hash) {
            case "#nosotros": myURL = "nosotros.html"; break;
            case "#buscar": myURL = "buscar.html"; break;
            case "#login": myURL = "login.html"; break;
            case "#registro": myURL = "registro.html"; break;
            case "#artistas": myURL = "perfilartistas.html"; break;
            case "#restaurantes": myURL = "perfilrestaurantes.html"; break;
            case "#tabla": myURL = "tabla.php"; break;
            default: myURL = "pro.html"; break;
        }
    }

    $.ajax({
        url: 'view/' + myURL,
        dataType: 'text',
        success: function (data) {
            $("#main").html(data);
        },
        error: function () {
            alert("error");
        }
    });
}
function cargarMain(agregar) {
    $(document).ready(function () {
        $('#main').load(agregar + '.html');
    });
}

/*--------------------------------FIN--------------------------------------------------*/

