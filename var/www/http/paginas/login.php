 
<!-- Container (Registrar pais) -->
<div id="pais" class="container-fluid">
  <div class="panel panel-info">
    <div class="panel-heading">
     <p><i class='glyphicon glyphicon-user'></i> LOGIN DE USUARIO</p>
    </div>
    <div class="panel-body">
  <div class="row">
    <div class="col-sm-8">
              <form id="form_pais" method ="post" action="">

        <div class="input-group">
      <div class="input-group-btn">
        <button type="button" class="btn btn-success">E-MAIL</button>
      </div>
            <input type="email" id="email_login" class="form-control" size="50" placeholder="Insira seu email">
    </div><br>

    <div class="input-group">
      <div class="input-group-btn">
         <button type="button" class="btn btn-success">SENHA</button>
      </div>
      <input type="password" id="senha_login" class="form-control" size="50" placeholder="Insira a sua senha" required>
    </div><br>
     <div class="input-group">
        <button class="btn btn-success btn-lg" id="logar" >LOGAR
      </button> 
  </div><br>
   </form>

   <!-- </div>
  </div>botão -->
  </div>
  </div>
      </div>
       </div>
      
 
</div>
  
<!-- Fin Container (Registrar Pais) -->
<script>
  $('#logar').click(function(){
 var senha_login  = $('#senha_login').val();
 var email_login = $('#email_login').val();

  $.ajax({
    type:"POST",
    url:"./assets/validacao/validacao.php",
    data:{senha_login:senha_login,email_login:email_login},
    success:function(r){
      if(r==1){
       header('Location: http://localhost/test_cpt/?menu=cliente');
        alertify.success("Bem-vindo:)");
      }else{
        alertify.error("Erro no servidor :(");
      }
    } 
  });
 
   });
   
  </script>
