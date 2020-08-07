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
        <form action="<?php echo base_url('curso/update');?>" name="post_form" id="post_form" method="post" accept-charset="utf-8">
        <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $post['id'] ?>">
          <div class="form-group">
            <label for="email">Titulo do curso</label>
            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Insira o título do curso." value="<?php echo $post['titulo'] ?>">
             
          </div>  

          <div class="form-group">
            <label for="email">Área do curso</label>
            
             
             <?php if($areas): ?>
              <select name= "id_area" id="id_area"  class="form-control">s
                <?php foreach($areas as $area): ?>
                  <?php if($area['id'] == $post['id_area']): ?>
                    <OPTION value=<?php echo $area['id']; "SELECTED" ?>><?php echo $area['desc']; ?></OPTION>
                  <?php else: ?>
                    <OPTION value=<?php echo $area['id']; ?>><?php echo $area['desc']; ?></OPTION>
                  <?php endif; ?>          
                <?php endforeach; ?>
              </select>
            <?php endif; ?>  
          </div>  

          <div class="form-group">
            <label for="email">Descrição</label>
            <input type="textarea" name="descricao" class="form-control" id="descricao" placeholder="Descrição do curso" value="<?php echo $post['descricao'] ?>">
             
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
      
      titulo: {
        required: true,       
      },  
      id_area: {
        required: true,  
      },  
      descricao: {
        required: true,       
      },   
    },
    messages: {
      nome: {
        required: "O título do curso é obrigatório",       
      }, 
      id_area: {
        required: "A área do curso é obrigatória",       
      },
      descricao:{
        required: "A descricao do curso é obrigatória",
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