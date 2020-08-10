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
        <form action="<?php echo base_url('matricula/store');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
  
          <div class="form-group">
            <label for="aluno">Aluno</label>
          
            <?php if($alunos): ?>
              <select name= "aluno" id="aluno"  class="form-control">
                <?php foreach($alunos as $aluno): ?>
                  <OPTION value=<?php echo $aluno['id']; ?>><?php echo $aluno['nome']; ?></OPTION>
                <?php endforeach; ?>
              </select>
            <?php endif; ?>  
          </div>  
          

          <div class="form-group">
            <label for="curso">Curso</label>
          
            <?php if($cursos): ?>
              <select name= "curso" id="curso"  class="form-control">
                <?php foreach($cursos as $curso): ?>
                  <OPTION value=<?php echo $curso['id']; ?>><?php echo $curso['titulo']; ?></OPTION>
                <?php endforeach; ?>
              </select>
            <?php endif; ?>  
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
      aluno: {
        required: true,       
      },  
      curso: {
        required: true,  
      }
    },
    messages: {
      aluno: {
        required: "O Aluno é obrigatório",       
      }, 
      curso: {
        required: "O Curso é obrigatório",       
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