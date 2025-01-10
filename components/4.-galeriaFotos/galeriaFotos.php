<style>
    
img {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
    display: inline-block;
}
.gallery {
    display: grid;
    grid-gap: 10px;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 200px;
    grid-auto-flow: dense;
}
.gallery > div {
    display: flex;
    justify-content: center;
    align-items: center;
}
.gallery > div > img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 5px;
}
.gallery .tall {
    grid-row: span 2;
}
.img-gallery img {
  transition: all 1.3s ease;
}
.img-gallery:hover img {
  transform: scale(1.2);
}
.fecha-boda3{
    font-family: "Pinyon Script", serif;
    font-weight: 300;
    font-size: 6.3rem;
    color: #344767;
}
</style>
<br>
<br>
<div class="bg-image img-fluid" style="background-image: url('assets/bg-flowers-black.png');
    background-size: cover;
    background-position: center; height:25vh;">
<div class="container">
    <div class="text-center">
        <br>
        <div class="row justify-content-md-center">
            <div class="linea-Novios">
                <div class="izqFlechaNovios"></div>
             <span class="fecha-boda3" >
                Nuestros Recuerdos
            </span>
            <br>
            <div class="derFlechaNovios"></div>

            </div>
            </div>
        </div>
    </div>
</div>
 <!-- Portfolio-->
  <div class="container">
 <div class="gallery">
        <div class="image-container img-gallery">
            <img src="./assets/45.jpg">
        </div>
        <div class="image-container img-gallery">
            <img src="./assets/88.jpg">
        </div>
        <div class="image-container tall img-gallery">
            <img src="./assets/338.jpg">
        </div>
        <div class="image-container img-gallery">
            <img src="https://cdn.pixabay.com/photo/2016/06/29/08/41/wedding-dresses-1486256_640.jpg">
        </div>
        <div class="image-container img-gallery">
            <img src="./assets/45.jpg">
        </div>
        <div class="image-container tall img-gallery">
            <img src="./assets/45.jpg">
        </div>
        <div class="image-container img-gallery">
            <img src="./assets/45.jpg">
        </div>
        <div class="image-container img-gallery">
            <img src="./assets/88.jpg">
        </div>
        <div class="image-container img-gallery">
            <img src="./assets/45.jpg">
        </div>
        
        <div class="image-container img-gallery">
            <img src="./assets/88.jpg">
        </div>
        
        <div class="image-container img-gallery">
            <img src="./assets/45.jpg">
        </div>
        
        <div class="image-container img-gallery">
            <img src="./assets/45.jpg">
        </div>
        
        <div class="image-container img-gallery">
            <img src="./assets/88.jpg">
        </div>
    </div>
    </div>