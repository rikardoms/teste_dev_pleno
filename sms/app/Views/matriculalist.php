<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Student Management System - Matricula Curso</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>
<body>
 
<div class="container mt-5">
    <a href="<?php echo base_url('matricula/create') ?>" class="btn btn-sm btn-success">Nova Matrícula</a>
   
  <div class="row mt-3">
     <table class="table table-bordered" id="matriculalist">
       <thead>
          <tr>
             <th>Matrícula</th>
             <th>Curso</th>
             <th>Aluno</th>
             <th>Ações</th>
          </tr>
       </thead>
       <tbody>
          <?php if($matriculas): ?>
          <?php foreach($matriculas as $matricula): ?>
          <tr>
             <td><?php echo $matricula['id']; ?></td>
             <td><?php echo $matricula['curso']; ?></td>
             <td><?php echo $matricula['aluno']; ?></td>
             <td>
              <a href="<?php echo base_url('matricula/edit/'.$matricula['id']);?>" class="btn btn-sm btn-success">Editar</a>
              <a href="<?php echo base_url('matricula/delete/'.$matricula['id']);?>" class="btn btn-sm btn-danger">Apagar</a>
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
      $('#matriculalist').DataTable();
  } );
  
</script>
</body>
</html>