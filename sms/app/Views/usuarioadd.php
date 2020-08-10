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
        <form action="<?php echo base_url('usuario/store');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
  
          <div class="form-group">
            <label for="nome">Nome do Usuário</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Insira o nome do usuário.">
          </div>  

          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Insira o e-mail do usuário.">
             
          </div>  
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="form-control" maxlength=8 id="senha" placeholder="Senha para acessar o sistema.">
             
          </div>   
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Salvar</button>
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
      senha: {
        required: true,       
      },   
    },
    messages: {
      nome: {
        required: "O nome do Usuário é obrigatório",       
      }, 
      email: {
        required: "O e-mail do Usuário é obrigatório",       
      },
      senha:{
        required: "A Senha do Usuário é obrigatória",
      }

    },
  })
}
</script>

<script>

  $(function(){
     
      });
</script>
</body>
</html>