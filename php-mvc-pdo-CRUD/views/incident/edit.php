<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="card">
      <div class="card-body">
       <a href="?c=incidents&m=index" class="btn btn-toggle mb-4 ">Cancelar</a>
       <div class="row">
        <div class="col-md-12">
           <form action="?c=incidents&m=update_incident&id=<?php echo $incident->id ?>" method="post">
               <div class="form-group mt-3">
                <label for="">Numero de la mesa</label>
                <input type="text" name="table_number" value="<?php echo $incident->table_number ?>" class="form-control">
               </div>
               <div class="form-group mt-3">
                <label for="">Descripcion del problema</label>
                <textarea class="form-control" name="description_problem" id="" cols="30" rows="10"><?php echo $incident->description_problem ?></textarea>
               </div>
               <div class="form-group mt-3">
                <label for="">Prioridad</label>
                 <select name="priority" id="" class="form-control">
                    <option  value="">Seleccionar...</option>
                    <option <?php echo $incident->priority == 'alta' ? 'selected' : '' ?> value="alta">alta</option>
                    <option <?php echo $incident->priority == 'media' ? 'selected' : '' ?> value="media">media</option>
                    <option <?php echo $incident->priority == 'baja' ? 'selected' : '' ?> value="baja">baja</option>
                 </select>
               </div>

               <div class="form-group mt-3">
                <label for="">Estado</label>
                 <select name="state" id="" class="form-control">
                    <option  value="">Seleccionar...</option>
                    <option <?php echo $incident->state == 'pendiente' ? 'selected' : '' ?> value="pendiente">pendiente</option>
                    <option <?php echo $incident->state == 'en-proceso' ? 'selected' : '' ?> value="en-proceso">en-proceso</option>
                    <option <?php echo $incident->state == 'resuelto' ? 'selected' : '' ?> value="resuelto">resuelto</option>
                 </select>
               </div>
                <hr>
                <button class="btn btn-primary">Guardar incidencia</button>
           </form>
        </div>
       </div> 
        
      </div>
    </div>
  </div>
</div>