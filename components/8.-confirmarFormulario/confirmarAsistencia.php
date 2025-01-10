
<style>
     .fondoFormu {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-image: url('./assets/fondo-formu.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  opacity: 0.3;
  z-index: -1;
  padding-bottom: 20px;
}
.titleUbicacion1{
  align-items: center;
}
.botonConfirmar{
  width: 100%;
  color: black;
  margin-top: 10px;
  letter-spacing: 0.5rem;
  height: 6rem;
}
</style>
<div id="app" class="">
  <div class="card bg-transparent border-0 h-100">
    <div class="card-body undefined" style="padding-top: 3rem; padding-bottom: 6rem;">
      <div class="fondoFormu"></div>
      <div class="container p-3">
      <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-4" style="display: flex;
      justify-content: center;">
  <div class="col">
    <div class="card">
    
      <div class="card-body">
        <div class="titleUbicacion titleUbicacion1" style="padding: 30px;">
        <span >CONFIRMAR ASISTENCIA</span> 
        <img decoding="async" width="168" height="114" src="https://entodaocasion.com/wp-content/uploads/2021/09/ornament-768x114.png" class="attachment-medium_large size-medium_large wp-image-3622" alt="" srcset="https://entodaocasion.com/wp-content/uploads/2021/09/ornament-768x114.png 768w, https://entodaocasion.com/wp-content/uploads/2021/09/ornament-300x45.png 300w, https://entodaocasion.com/wp-content/uploads/2021/09/ornament.png 1024w" sizes="(max-width: 768px) 100vw, 768px" style="text-align: center;">
        <br>
        <form  action = "" method = "post" style="width: 100%;">
        <div class="form-group">
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Completo" style="font-size: 1.7rem;     height: 50px ; line-height: 2.2rem;">
  </div>
  <div class="form-group">
    <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Numero de telefono" pattern="[0-9]{10}" required  style="font-size: 1.7rem;     height: 50px ; line-height: 2.2rem;">
  </div>
  <div class="form-group">
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" style="font-size: 1.7rem;     height: 50px ; line-height: 2.2rem;">
  </div>
  <div class="form-group">
    <select class="form-control" id="exampleFormControlSelect1" style="font-size: 1.7rem;     height: 50px ; line-height: 2.2rem;">
      <option>Si, asistiré</option>
      <option>No, asistiré</option>
    </select>
  </div>
  <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Mensaje de buenos deseos" style="font-size: 1.7rem; line-height: 2.2rem;"></textarea>
  </div>
  <input type="submit" name="confirmar" value="Confirmar" class="button-43 botonConfirmar"  />
</form>
    
  
      </div>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
</div>