
<style>
    .contenedorV{
        margin-right: 20px;
        margin-bottom: 20px;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 50px;
        box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.08);
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        margin: 2em 2em 2em 2em;
        --e-column-margin-right: 2em;
        --e-column-margin-left: 2em;
        padding: 4em 2em 4em 2em;
        border-radius: 6px;
    }
    .imgVestimenta img{
        width: 60%;
    }
    .imgVestimenta{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .codVesText{
        font-family: "Pinyon Script", serif;
        font-size: 3.6rem;
        margin-top: 9px;
        font-weight: 600;
        color:rgb(141, 177, 164);
    }
    .codVesText2{
        font-size: 1.4rem;
        font-family: "Prata", Sans-serif;
        font-weight: 600;
    }
    .evitarText{
        font-family: "Prata", Sans-serif;
        font-weight: 600;
        font-size: 1.6rem;
    }
    .vestText1{
        font-family: "Pinyon Script", serif;
    font-weight: 300;
    font-size: 6.3rem;
    color: #344767;
    }
    @media screen and (max-width: 768px) {
    .contenedorVestimenta{
       align-items: center;
       justify-content: center;
    }
    }
    @media screen and (max-width: 760px) {
    .fecha-boda3{
        font-size: 5rem;
    }
    }
    @media screen and (max-width: 990px) {
    .vestText1{
        font-size: 4rem;
    }
    }
    @media screen and (max-width: 500px) {
    .vestText1{
        font-size: 3rem;
    }
    }
</style>
<br><br><br><br>
<div class="container">
    <div class="row justify-content-md-center contenedorVestimenta">
        <div class="row justify-content-md-center">
            <div class="linea-Novios">
                <div class="izqFlechaNovios"></div>
             <span class="vestText1" >
             Codigo de Vestimenta
            </span>
            <br>
            <div class="derFlechaNovios"></div>

            </div>
            </div>
        <br>
        <div class="col-12 col-12 col-sm-12 col-md-4 contenedorV">
        <div class=" imgVestimenta">
            <img src="./assets/traje-de-novio.png">
        </div>
        <span class="codVesText">
            Para Hombres
        </span>
        <span class="codVesText2">
            Vestimenta Formal
        </span>
        </div>
        <div class="col-12 col-12 col-sm-12 col-md-4 contenedorV">
        <div class=" imgVestimenta">
            <img src="./assets/ropa-de-mujer.png">
        </div>
        <span class="codVesText">
            Para Mujeres
        </span>
        <span class="codVesText2">
            Vestimenta Formal
        </span>
        </div>
        
    <span style="text-align: center;" class="evitarText">
           *** EVITAR EL COLOR <u>BLANCO, </u> ESTA RESERVADO PARA LA NOVIA. ***
        </span>
    </div>
</div>