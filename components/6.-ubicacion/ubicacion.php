<style>
    .contenedorUbicacion{
        margin-right: 20px;
        margin-bottom: 20px;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.08);
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin: 2em 2em 2em 2em;
        --e-column-margin-right: 2em;
        --e-column-margin-left: 2em;
        padding: 4em 2em 4em 2em;
        border-radius: 6px;
    }
    
    .imgUbicacion img{
        width: 60%;
    }
    .imgUbicacion{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .fondo {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20240606/pngtree-vintage-rose-garland-wedding-background-image_15861079.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  opacity: 0.3;
  z-index: -1;
}
.ubicacionNovios{
    height: 25vh;
}
.titleUbicacion{
    font-size: 2.1rem;
    font-family: "Prata", Sans-serif;
    font-weight: 600;
    text-align: center;
    display: flex;
    justify-content: center;
    flex-direction: column;
    letter-spacing: .2rem;
}
.horarioUbi{
    font-size: 1.6rem;
    font-family: "Prata", Sans-serif;
    font-weight: 600;
}
.textubic{
    font-size: 1.8rem;
    font-family: "Lora", Sans-serif;
    color:rgb(116, 126, 123);
}
.centrarbotones{
    text-align: center;
}
@media screen and (max-width: 520px) {
    .modfimgubic{
       height: auto!important;
    }
    }
</style>



<br>
<div class="bg-image img-fluid" style="background-image: url('assets/bg-flowers-black.png');
    background-size: cover;
    background-position: center; height:25vh;">
<div class="container">
    <div class="text-center">
        <br>
        <div class="row justify-content-md-center">
            <div class="linea-Novios ubicacionNovios">
                <div class="izqFlechaNovios"></div>
             <span class="fecha-boda3" >
                Ubicacion
            </span>
            <br>
            <div class="derFlechaNovios"></div>

            </div>
            </div>
        </div>
    </div>
</div>

<div id="app" class="">
  <div class="card bg-transparent border-0 h-100">
    <div class="card-body undefined">
      <div class="fondo"></div>
      <div class="container p-3">
      <div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://haciendachaka.com/wp-content/uploads/2015/08/b256c19c947ae444b7f98a401ac8a177.jpg" class="card-img-top modfimgubic" alt="..." style="height: 350px;">
      <div class="card-body">
        <div class="titleUbicacion">
        <span >CEREMONIA RELIGIOSA</span> 
        <span class="horarioUbi">06:00 PM</span>  </div>
        <br>
        <div class="textubic">
    <span class="textUbicacion"> <i class="fa fa-map-marker"></i> Iglesia temozon norte</span><br>
    <span class="textUbicacion"><i class="fa fa-map-marker"></i> Calle 9 diag 3349 x32 y 45 Temozon norte</span>
    </div>
    <br>
    <div class="centrarbotones">
    <button class="button-43" role="button" onclick="">
    <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 8px; font-size: 20px;"></i>
    Ver GPS</button>
    </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://scontent.fmid3-1.fna.fbcdn.net/v/t39.30808-6/471500172_1236805537422873_4959343252941703146_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=833d8c&_nc_ohc=Ynzflv1l56MQ7kNvgHMZsod&_nc_zt=23&_nc_ht=scontent.fmid3-1.fna&_nc_gid=Af5nWbbo07ZVrSW7heba9wU&oh=00_AYBt9RyRT2vLCZy6ktMulSvE31cIQL2S9BFdGczeLM7SBg&oe=67835051" class="card-img-top modfimgubic" alt="..." style="height: 350px;">
      <div class="card-body">
      <div class="titleUbicacion">
        <span class="titleUbicacion">RECEPCIÓN</span>
        <span class="horarioUbi">08:00 PM</span> 
    </div>
    <br>
    <div class="textubic">
    <span class="textUbicacion"> <i class="fa fa-map-marker"></i> Salon el almendro</span><br>
    <span class="textUbicacion"><i class="fa fa-map-marker"></i> Calle 9 diag 3349 x32 y 45 Temozon norte</span>
    </div>
    <br>
    <div class="centrarbotones">
    <button class="button-43" role="button" onclick="">
    <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 8px; font-size: 20px;"></i>
    Ver GPS</button>
    </div>
       
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>