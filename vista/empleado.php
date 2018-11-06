<div class="container">
<div class="jumbotron">
  <h2>Formulario de Registro</h2>
</div>
<div class="cold-md-12">
<div class="form-horizontal" style="">
  <form action="index.php?c=empleado&a=save" method="post">
    <input type="hidden" name="txt_id" value="<?php echo $data['_id']!==0 ? $data['_id']:"0" ?>"/>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="txt_num_control">Número de control:</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $data['num_control']?>" class="form-control" name="txt_num_control" required="" >
      </div>
   </div>
   <div class="form-group">
     <label class="col-sm-2 control-label" for="txt_nombre">Nombre:</label>
     <div class="col-sm-10">
       <input type="text" value="<?php echo $data['nombre']?>" class="form-control" name="txt_nombre" value="" required="">
     </div>
     </div>
       <div class="form-group">
         <label class="col-sm-2 control-label" for="txt_ap_paterno">Apellido paterno:</label>
         <div class="col-sm-10">
           <input type="text" value="<?php echo $data['ap_paterno']?>" class="form-control" name="txt_ap_paterno" value="" required="">
         </div>
         </div>
         <div class="form-group">
           <label class="col-sm-2 control-label" for="txt_ap_materno">Apellido materno:</label>
           <div class="col-sm-10">
             <input type="text" value="<?php echo $data['ap_materno']?>" class="form-control" name="txt_ap_materno" value="" required="">
           </div>
           </div>
           <div class="form-group">
             <label class="col-sm-2 control-label" for="txt_edad">Edad:</label>
             <div class="col-sm-10">
               <input type="number" value="<?php echo $data['edad']?>" class="form-control" name="txt_edad" value="" required="">
             </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Sexo: </label>
               <div class="col-sm-10">
                 <label class="radio-inline">
                   <input type="radio" name="rd_sexo" id="optionsRadios1" value="Masculino" required
                     <?php echo $data['sexo'] == "Masculino" ? "checked" : "" ?>>
                   Masculino
                 </label>
                 <label class="radio-inline">
                   <input type="radio" name="rd_sexo" id="optionsRadios2" value="Femenino"
                   <?php echo $data['sexo'] == "Femenino" ? "checked" : "" ?>>
                   Femenino
                 </label>
               </div>
             </div>
             <div class="form-group">
               <label class="col-sm-2 control-label">Departamento: </label>
               <div class="col-sm-10">

              <select class="form-control" name="sel_departamento">
                <option value="0" >--Selecciona--</option>
                <?php foreach($query as $row): ?>
                  <option value="<?php echo $row['_id'] ?>"><?php echo $row['nombre'] ?></option>
                <?php endforeach; ?>
              </select>
               </div>
             </div>
             <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                 <button type="submit" class="btn btn-default">Guardar</button>
               </div>
             </div>
    </form>
  </div>
  </div>
</div>
