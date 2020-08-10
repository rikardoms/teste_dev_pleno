<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Management System - Area Curso</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo base_url('usuario/create') ?>" class="btn btn-sm btn-success">Novo Usuário</a>
   
  <div class="row mt-3">
     <table class="table table-bordered" id="usuariolist">
       <thead>
          <tr>
             <th>Id</th>
             <th>Nome</th>
             <th>Email</th>
             <th>Ações</th>
          </tr>
       </thead>
       <tbody>
          <?php if($usuarios): ?>
          <?php foreach($usuarios as $usuario): ?>
          <tr>
             <td><?php echo $usuario['id']; ?></td>
             <td><?php echo $usuario['name']; ?></td>
             <td><?php echo $usuario['email']; ?></td>
             <td>
              <a href="<?php echo base_url('usuario/edit/'.$usuario['id']);?>" class="btn btn-sm btn-success">Editar</a>
              <a href="<?php echo base_url('usuario/delete/'.$usuario['id']);?>" class="btn btn-sm btn-danger">Apagar</a>
             </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
<script>
    $(document).ready( function () {
      $('#usuariolist').DataTable();
  } );
  
</script>
</body>
</html>