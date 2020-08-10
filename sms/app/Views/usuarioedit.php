<!DOCTYPE html>
<html>
<head>
  <title>Codeigniter 4 CRUD Tutorial - Edit Post Form With Validation Example</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
   <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

 
</head>
<body>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('usuario/update');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
 
           <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $post['id'] ?>">
  
          <div class="form-group">
            <label for="nome">Nome do Aluno</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira a Nome do usuário" value="<?php echo $post['name'] ?>">
             
          </div>   

          <div class="form-group">
            <label for="email">E-mail do Aluno</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Insira o e-mail do usuario." value="<?php echo $post['email'] ?>">
             
          </div>  
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha de acesso ao sistema">
             
          </div>  
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Atualizar</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
<script>
  
  if ($("#post_form").length > 0) {
      $("#post_form").validate({
      
        rules: {
      
      nome: {
        required: true,       
      },  
      email: {
        required: true,    
        email: true   
      },  
      data_nasc: {
        required: true,       
      },   
    },
    messages: {
      nome: {
        required: "O nome do Usuario é obrigatório",       
      }, 
      email: {
        required: "O e-mail do Usuario é obrigatório",       
      },
      senha:{
        required: "A nova senha é obrigatória",
      }

    },
  })


}
  
</script>
</body>
</html>