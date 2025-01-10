
<script>
		var position = 0;
		function move(direction) {
			position = position + direction * 500; //ancho del desplazamiento deseado
			document.getElementById('wrapper').style.backgroundPosition = position + 'px 0px';
		}
			
		</script>
<style>

   #myCarousel{
        width: 100%;
        height:900px;
        overflow: hidden;
      }
      .other-section{
          height: 400px;
      }
      .bg-blue{
          background-color: blue;
      }
      .bg-red{
          background-color: red;
      }
      .fondo-negro{
        background-color:rgba(3, 3, 3, 0.37);
        position: absolute;
        top: 0;
        width: 100%;
        height:900px;
        z-index: 2;
      }
      .mensajeSlider{
        position: absolute;
        top: 20%;
        right: 15%;
        text-align: center;
        width: 70%;
      }
      .mensajeSlider h2{
        color: white!important;
        font-size: 12vh!important;
        font-family: "Pinyon Script", serif;
        font-weight: 400;
      }
      .mensajeSlider spam{
        color: white!important;
        font-size: 2.4vh!important;
        font-family: "Oswald", serif;
        letter-spacing: 0.3em
      }
    .izqFlecha{
        width: 20%;
        color: white!important;
        height: 1px!important;
        border: 1px white solid;
        margin-right: 10px;
        
        border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)!important;
    }.derFlecha{
        width: 20%;
        color: white!important;
        border: 0.7px white solid;
        margin-left: 10px;
        
        border-block-start: var(--divider-border-width) var(--divider-border-style) var(--divider-color)!important;
    }
    .linea-fecha{
        display: flex;
        align-items: center;
        justify-content: center;
        color: white!important;
    }
    .fecha-boda{
      
      font-family: "Oswald", serif;
    }
    @media screen and (max-width: 1665px) {
      #myCarousel{
          height:820px;
        }
        .fondo-negro{
          height:820px;
        }
        .curveado {
    bottom: -0.2%!important;
}
}
    @media screen and (max-width: 1479px) {
      #myCarousel{
          height:820px;
        }
        .fondo-negro{
          height:820px;
        }
        .curveado {
    bottom: -0.1%!important;
}
}
@media screen and (max-width: 1412px) {
      #myCarousel{
          height:720px;
        }
        .fondo-negro{
          height:720px;
        }
        .curveado {
    bottom: 10.1%!important;
}
}
@media screen and (max-width: 1282px) {
      #myCarousel{
          height:620px;
        }
        .fondo-negro{
          height:620px;
        }
        .curveado {
    bottom: 24.1%!important;
      }
      .mensajeSlider h2{
        font-size: 10vh!important;
      }
      .mensajeSlider spam{
        font-size: 1.4vh!important;
      }
      .fecha-boda{
        font-size: 2vh!important;
      }
}
@media screen and (max-width: 1102px) {
      #myCarousel{
          height:520px;
        }
        .fondo-negro{
          height:520px;
        }
        .curveado {
    bottom: 36.7%!important;
      }
      .mensajeSlider h2{
        font-size: 8vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.9vh!important;
      }
      .fecha-boda{
        font-size: 1.2vh!important;
      }
}
@media screen and (max-width: 929px) {
      #myCarousel{
          height:420px;
        }
        .fondo-negro{
          height:420px;
        }
        .curveado {
    bottom: 48.7%!important;
      }
      .mensajeSlider h2{
        font-size: 6vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.8vh!important;
      }
      .fecha-boda{
        font-size: 0.9vh!important;
      }
}
@media screen and (max-width: 748px) {
      #myCarousel{
          height:320px;
        }
        .fondo-negro{
          height:320px;
        }
        .curveado {
    bottom: 58.7%!important;
      }
      .mensajeSlider h2{
        font-size: 5vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.4vh!important;
      }
      .fecha-boda{
        font-size: 0.7vh!important;
      }
}

@media screen and (max-width: 574px) {
      #myCarousel{
          height:280px;
        }
        .fondo-negro{
          height:280px;
        }
        .curveado {
    bottom: 65.9%!important;
      }
      .mensajeSlider h2{
        font-size: 4vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.3vh!important;
      }
      .fecha-boda{
        font-size: 0.6vh!important;
      }
}
@media screen and (max-width: 501px) {
      #myCarousel{
          height:240px;
        }
        .fondo-negro{
          height:240px;
        }
        .curveado {
    bottom: 70.8%!important;
      }
      .mensajeSlider h2{
        font-size: 3.5vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.26vh!important;
      }
      .fecha-boda{
        font-size: 0.5vh!important;
      }
}
@media screen and (max-width: 424px) {
      #myCarousel{
          height:200px;
        }
        .fondo-negro{
          height:200px;
        }
        .curveado {
    bottom: 75.1%!important;
      }
      .mensajeSlider h2{
        font-size: 2.8vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.2vh!important;
      }
      .fecha-boda{
        font-size: 0.4vh!important;
      }
}
@media screen and (max-width: 415px) {
      #myCarousel{
          height:230px;
        }
        .fondo-negro{
          height:230px;
        }
        .curveado {
    bottom: 68.7%!important;
      }
      .mensajeSlider h2{
        font-size: 3.8vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.4vh!important;
      }
      .fecha-boda{
        font-size: 1.2vh!important;
      }
}

@media screen and (max-width: 390px) {
      #myCarousel{
          height:200px;
        }
        .fondo-negro{
          height:200px;
        }
        .curveado {
    bottom: 75.2%!important;
      }
      .mensajeSlider h2{
        font-size: 2vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.2vh!important;
      }
      .fecha-boda{
        font-size: 0.4vh!important;
      }
}
@media screen and (max-width: 376px) {
      #myCarousel{
          height:200px;
        }
        .fondo-negro{
          height:200px;
        }
        .curveado {
    bottom: 70.0%!important;
      }
      .mensajeSlider h2{
        font-size: 4vh!important;
      }
      .mensajeSlider spam{
        font-size: 0.9vh!important;
      }
      .fecha-boda{
        font-size: 1.0vh!important;
      }
}
</style>

<div class="fondo-negro">
    <div class="mensajeSlider" >
        <spam>¡NOS CASAMOS!</spam>
        <h2>Ignacio <br>
            Y
            <br>
             Lizbeth</h2>
            <div class="linea-fecha">
                <div class="izqFlecha"></div>
             <span style="font-size: 2.8vh;" class="fecha-boda">
                16 de marzo 2025
            </span>
            <div class="derFlecha"></div>
            </div>
    </div>
</div>

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <div class="item active">
      <img src="assets/88.jpg" alt="..." width="100%" >
      <div class="carousel-caption">
        <h3>Slide 1</h3>
      </div>
    </div>

    <div class="item ">
      <img src="assets/338.jpg" alt="..." width="100%" >
      <div class="carousel-caption">
        <h3>Slide 2</h3>
      </div>
    </div>

    <div class="item">
      <img src="assets/45.jpg" alt="..." width="100%" >
      <div class="carousel-caption">
        <h3>Slide 3</h3>
      </div>
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="z-index: 3;">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="z-index: 3;">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>





<!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!--Botstrap 3 JS-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
