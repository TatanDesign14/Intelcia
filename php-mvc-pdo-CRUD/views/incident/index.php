<div class="body flex-grow-1 px-3">
  <div class="container-lg">
    <div class="card">
      <div class="card-body">
       <a href="?c=incidents&m=create" class="btn btn-primary mb-4 ">Crear nueva incidencia</a>
       <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr class="bg-primary text-white">
                  <th>ID Reclamacion </th>
                  <th># Mesa </th>
                  <th>Descripcion del problema </th>
                  <th>Prioridad </th>
                  <th>Estado </th>
                  <th>Fecha </th>
                  <th>Acciones </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($incidents  as $incident){ ?> 
                 <tr>
                   <td><?php print $incident->id ?></td>
                   <td><?php print $incident->table_number ?></td>
                   <td><?php print $incident->description_problem ?></td>
                   <td><?php print $incident->priority ?></td>
                   <td><?php print $incident->state ?></td>
                   <td><?php print $incident->date ?></td>
                   <td>
                    <a href="?c=incidents&m=edit&id=<?php echo $incident->id ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="?c=incidents&m=destroy&id=<?php echo $incident->id?>" class="btn btn-sm btn-danger">Eliminar</a>
                   </td>
                 </tr>
                 <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
       </div> 
        
      </div>
    </div>
  </div>
</div>
