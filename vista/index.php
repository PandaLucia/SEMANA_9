<div class="container" styles="margin-top:80px">
  <div class="jumbotron">
    <h2>Registro de Empleados</h2>
</div>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Número de control</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Sexo</th>
        <th>Departamento</th>
        <th>Acción</th>
      </tr>
    </thead>
  <tbody>
    <?php foreach($query as $data): ?>
      <tr>
        <td><?php echo $data['num_control'] ?></td>
        <td><?php echo $data['nombre'] ?></td>
        <td><?php echo $data['ap_paterno'].' '.$data['ap_materno'] ?></td>
        <td><?php echo $data['edad'] ?></td>
        <td><?php echo $data['sexo'] ?></td>
        <td><?php echo $data['departamento_id'] ?></td>
        <td>
          <a href="index.php?c=empleado&a=empleado&_id=<?php echo $data['_id']?>" class="btn btn-default">
          Editar</a>
          <a href="index.php?c=empleado&a=delete&_id=<?php echo $data['_id']?>" class="btn btn-danger">
          Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
</div>
</div>
