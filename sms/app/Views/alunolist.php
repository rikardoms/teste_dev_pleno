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
    <a href="<?php echo base_url('aluno/create') ?>" class="btn btn-sm btn-success">Novo Aluno</a>
   
  <div class="row mt-3">
     <table class="table table-bordered" id="alunolist">
       <thead>
          <tr>
             <th>Id</th>
             <th>Nome</th>
             <th>Email</th>
             <th>Dt.Nasc.</th>
             <th>Ações</th>
          </tr>
       </thead>
       <tbody>
          <?php if($alunos): ?>
          <?php foreach($alunos as $aluno): ?>
          <tr>
             <td><?php echo $aluno['id']; ?></td>
             <td><?php echo $aluno['nome']; ?></td>
             <td><?php echo $aluno['email']; ?></td>
             <td><?php echo $aluno['data_nasc']; ?></td>
             <td>
              <a href="<?php echo base_url('aluno/edit/'.$aluno['id']);?>" class="btn btn-sm btn-success">Editar</a>
              <a href="<?php echo base_url('aluno/delete/'.$aluno['id']);?>" class="btn btn-sm btn-danger">Apagar</a>
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
      $('#alunolist').DataTable();
  } );
  
</script>
</body>
</html>