<br><br>


<style>
    .days-fecha{
        width: 170px;
    height: 110px;
    background-color: #DEEAE8;
    padding: 0px 0px 0px 0px;
    margin: 10px 10px 10px 10px;
    border-style: solid;
    border-width: 1px 1px 1px 1px;
    border-color: #75706929;
    border-radius: 500px 500px 500px 500px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: "Prata", Sans-serif;
    font-size: 1.5rem;
    }
    .days-fecha span{
        font-size: 3.6rem;
        font-family: "Prata", Sans-serif;
    }
    .FlexContainer {
        display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    align-content: flex-start;
    max-width: 1200px;
    overflow: auto;
    flex-direction: row;
    justify-content: center;
    }
    .cuentaRegresiva h2{
        font-family: "Prata", Sans-serif; 
        font-size: 5.6rem;
        font-family: "Pinyon Script", serif;
    }
    .texto-boton-confirm{
        font-size: 1.6rem;
        font-family: "Prata", Sans-serif;
    }
    /* CSS */
.button-43 {
  background-image: linear-gradient(-180deg,rgb(206, 231, 226) 0%,rgb(175, 229, 220) 100%);
  border-radius: .5rem;
  box-sizing: border-box;
  color:#6c6c6c;
  font-size: 16px;
  padding: 1rem 3.75rem!important;
  text-decoration: none;
  border: 0;
  cursor: pointer;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  font-weight: 700;
  font-family: "Prata", Sans-serif;
  border-color: #75706929;
}

.button-43:hover {
 
  background-image: linear-gradient(-180deg,rgb(191, 232, 223) 0%,rgb(158, 232, 219) 100%);
  color:rgb(46, 46, 46);
}

@media (min-width: 768px) {
  .button-43 {
    padding: 1rem 2rem;
  }
}
</style>
<div class="container">
<section class="cuentaRegresiva" style="text-align: center;">
    <h2>
    Conteo Regresivo
    </h2>
    <br>
    <div class="row d-flex justify-content-center" > 
        <div class="FlexContainer ">
            <div class="col-md-2 days-fecha">
                <span id="days">
                </span>  días
            </div>
            <div class="col-md-2  days-fecha">
                <span id="hours">
                </span>  horas
            </div>
            <div class="col-md-2 days-fecha">
                <span id="minutes">
                </span>  minutos
            </div>
            <div class="col-md-2 days-fecha">
                <span id="seconds">
                </span>  segundos
            </div>
        </div>
    </div>
    </section>
</div>

<div class="container" style="text-align: center;">
    <span class="texto-boton-confirm">
      Nos encantaría contar con tu asistencia, por favor no olvides confirmar tu asistencia.
    </span>
    <br><br>
   <!-- HTML !-->
    <button class="button-43" role="button" onclick="">
    <i class="fa fa-calendar" aria-hidden="true" style="margin-right: 8px;"></i>






    Confirmar</button>


</div>

















    <script>
         document.addEventListener('DOMContentLoaded', () => {

//===
// VARIABLES
//===
const DATE_TARGET = new Date('03/16/2025 7:00 PM');
// DOM for render
const SPAN_DAYS = document.querySelector('span#days');
const SPAN_HOURS = document.querySelector('span#hours');
const SPAN_MINUTES = document.querySelector('span#minutes');
const SPAN_SECONDS = document.querySelector('span#seconds');
// Milliseconds for the calculations
const MILLISECONDS_OF_A_SECOND = 1000;
const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

//===
// FUNCTIONS
//===

/**
* Method that updates the countdown and the sample
*/
function updateCountdown() {
    // Calcs
    const NOW = new Date()
    const DURATION = DATE_TARGET - NOW;
    const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);
    const REMAINING_HOURS = Math.floor((DURATION % MILLISECONDS_OF_A_DAY) / MILLISECONDS_OF_A_HOUR);
    const REMAINING_MINUTES = Math.floor((DURATION % MILLISECONDS_OF_A_HOUR) / MILLISECONDS_OF_A_MINUTE);
    const REMAINING_SECONDS = Math.floor((DURATION % MILLISECONDS_OF_A_MINUTE) / MILLISECONDS_OF_A_SECOND);
    // Thanks Pablo Monteserín (https://pablomonteserin.com/cuenta-regresiva/)

    // Render
    SPAN_DAYS.textContent = REMAINING_DAYS;
    SPAN_HOURS.textContent = REMAINING_HOURS;
    SPAN_MINUTES.textContent = REMAINING_MINUTES;
    SPAN_SECONDS.textContent = REMAINING_SECONDS;
}

//===
// INIT
//===
updateCountdown();
// Refresh every second
setInterval(updateCountdown, MILLISECONDS_OF_A_SECOND);
});
</script>