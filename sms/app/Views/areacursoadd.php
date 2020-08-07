<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD Tutorial - Post Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
 
</head>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('areacurso/store');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
  
          <div class="form-group">
            <label for="email">Nome da Área do Curso</label>
            <input type="text" name="desc" class="form-control" id="email" placeholder="Insira a área do curso. Ex. Biologia, Ciências Humanas, etc.">
             
          </div>   
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#post_form").length > 0) {
      $("#post_form").validate({
      
    rules: {
      
      description: {
        required: true,       
      },   
    },
    messages: {
      description: {
        required: "Prezado usuário o campo [Area do Curso] é obrigatório",       
      }, 
    },
  })
}
</script>
</body>
</html>