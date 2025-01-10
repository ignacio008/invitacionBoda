<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/imagotipo_aec.ico">
    <link rel="icon" type="image/png" href="img/imagotipo_1-01.svg">
    <title>
        Invitacion de Boda
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="testtt.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link id="pagestyle" href="css/soft-design-system-pro.css?v=1.0.8" rel="stylesheet">



  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pavanam&family=Pinyon+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    
</head>
<body>
<style>
    @media (max-width: 590px) {
        #tablaIne tbody tr th {
            font-size: 0.8rem !important;
        }
    }

    @media (max-width: 750px) {
        #tablaIne tbody tr th {
            font-size: 1.2rem !important;
        }
    }

    @media (max-width: 614px) {
        #tablaIne tbody tr th {
            font-size: 1rem !important;
        }
    }

    @media (max-width: 488px) {
        #tablaIne tbody tr th {
            font-size: 0.6rem !important;
        }
    }
</style>

<?php 
include 'components/nav.php';
include 'components/1.-slider/slider.php';
include 'components/1.-slider/formas.php';
include 'components/2.-audioNovios/audioNovios.php';
include 'components/3.-cuentaRegresiva/fotoIndiNovios.php';
include 'components/3.-cuentaRegresiva/cuentaRegresiva.php';
include 'components/4.-galeriaFotos/galeriaFotos.php';
include 'components/5.-codigoVestimenta/codigoVestimenta.php';
include 'components/6.-ubicacion/ubicacion.php';
include 'components/7.-mesaRegalos/mesaRegalos.php';
include 'components/8.-confirmarFormulario/confirmarAsistencia.php';

?>





<!-- BOTONERAS -->
<script>
    // Hide all elements with class="containerTab", except for the one that matches the clickable grid column
    function openTab(tabName) {
        var i, x;
        x = document.getElementsByClassName("containerTab");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }

        var y, z;
        z = document.getElementsByClassName("columna-tabs");
        for (y = 0; y < z.length; y++) {
            z[y].style.background = "#81d2e2"
        }
        document.getElementById(tabName).style.display = "block";
        switch (tabName) {
            case "b1":
                document.getElementById("colum1").style.background = "#cae3e8";
                break;
            case "b2":
                document.getElementById("colum2").style.background = "#cae3e8";
                break;
            case "b3":
                document.getElementById("colum3").style.background = "#cae3e8";
                break;
            case "b4":
                document.getElementById("colum4").style.background = "#cae3e8";
                break;
        }
        document.getElementById(tabName).style.background = "#cae3e8";
    }

</script>

<!-- JAVASCRIPT NAVBAR TELEFONO-->
<script>
    $(window).resize(function () {
        var ventana_ancho = $(window).width();
        if (ventana_ancho > 993) {
        } else {
            flip_card();
        }
    });

    $(document).ready(function () {
        var ventana_ancho = $(window).width();
        if (ventana_ancho > 993) {
        } else {
            flip_card();
        }
    });
</script>

<script>
    AOS.init();
</script>

<!-- initialization script -->
<script>
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    })
</script>

<script>
    $(document).ready(function () {
        flip_card();
    });

    function flip_card() {
        front = document.getElementsByClassName("front");
        back = document.getElementsByClassName("back");
        highest = 0;
        absoluteSide = "";

        for (var i = 0; i < front.length; i++) {
            if (front[i].offsetHeight > back[i].offsetHeight) {
                if (front[i].offsetHeight > highest) {
                    highest = front[i].offsetHeight;
                    absoluteSide = ".front";
                }
            } else if (back[i].offsetHeight > highest) {
                highest = back[i].offsetHeight;
                absoluteSide = ".back";
            }
        }
        $(".front").css("height", highest);
        $(".back").css("height", highest);
        $(absoluteSide).css("position", "absolute");
    }
</script>

</body>
</html>