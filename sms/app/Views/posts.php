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
    <a href="<?php echo base_url('posts/create') ?>" class="btn btn-sm btn-success">Create</a>
   
  <div class="row mt-3">
     <table class="table table-bordered" id="posts">
       <thead>
          <tr>
             <th>Id</th>
             <th>Title</th>
             <th>Description</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($posts): ?>
          <?php foreach($posts as $post): ?>
          <tr>
             <td><?php echo $post['id']; ?></td>
             <td><?php echo $post['title']; ?></td>
             <td><?php echo $post['description']; ?></td>
             <td>
              <a href="<?php echo base_url('posts/edit/'.$post['id']);?>" class="btn btn-sm btn-success">Edit</a>
              <a href="<?php echo base_url('posts/delete/'.$post['id']);?>" class="btn btn-sm btn-danger">Delete</a>
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
      $('#posts').DataTable();
  } );
</script>
</body>
</html>