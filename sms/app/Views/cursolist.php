<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Management System - Curso</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo base_url('curso/create') ?>" class="btn btn-sm btn-success">Novo Curso</a>
   
  <div class="row mt-3">
     <table class="table table-bordered" id="cursolist">
       <thead>
          <tr>
             <th>Id</th>
             <th>Título</th>
             <th>Area</th>
             <th>Ações</th>
          </tr>
       </thead>
       <tbody>
          <?php if($cursos): ?>
          <?php foreach($cursos as $curso): ?>
          <tr>
             <td><?php echo $curso['id']; ?></td>
             <td><?php echo $curso['titulo']; ?></td>
             <td><?php echo $curso['area']; ?></td>
             
             <td>
              <a href="<?php echo base_url('curso/edit/'.$curso['id']);?>" class="btn btn-sm btn-success">Editar</a>
              <a href="<?php echo base_url('curso/delete/'.$curso['id']);?>" class="btn btn-sm btn-danger">Apagar</a>
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
      $('#cursolist').DataTable();
  } );
  
</script>
</body>
</html>