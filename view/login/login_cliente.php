
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">
    <link href="../../img/icone.png" rel="icon">
    <script src="../../jquery/dist/jquery.mim.js"></script>
    <script src="../../popper.js/dist/popper.min.js"></script>
    <script src="../../bootstrap/dist/js/bootstrap.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.css">
    
    <!--node_modules/css/styles.css-->
    <!--<link type= "text/css"  rel="stylesheet" href="node_modules/css/styles.css">-->
    <link href="../../fontawesome/css/all.css" rel="stylesheet">
    <link type= "text/css"  rel="stylesheet" href="../../css/estilo_login.css">
    <title>HELPDESK | Login | Cliente</title>
    


</head>
<body>
    <div class="login">
        <img src="../../img/usuario.png" class="usuario" width="100" height="100" alt="">
        <h1>Login</h1>
        <h5>CLIENTE</h5>
        <form method="POST" action="../../controller/valida_cliente.php">
        <div class="form-group">
             <p>Nome</p>
               <div class="input-group">
                  <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name="email" id="inputNome" class="form-control" placeholder="Insira seu e-mail" required>
                </div>
        </div>
        <div class="form-group">
             <p>Senha</p>
                <div class="input-group">
                   <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                   </div>
               <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Insira sua senha" required>
                </div>
        </div>
           
        <input type="submit" name="" value="Login">
        </form>


    </div>

    <!-- Exibe mensagem de erro -->
    <div class="col-6 alerta">
        
    </div>
        
</body>
</html>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>