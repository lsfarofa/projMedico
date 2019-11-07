<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container"> <a class="navbar-brand" href="<?php echo site_url('medicos/index') ?>">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> Avaliação Médicos</b>
      
          <div class="col-md-6 " style="">
            <div class="btn-group">
         
              <div class="dropdown-menu">
                <form class="p-3">
                  <div class="form-group">
                    <label for="exampleDropdownFormEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleDropdownFormPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck"> Remember me </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">New around here? Sign up</a>
                <a class="dropdown-item" href="#">Forgot password?</a>
              </div>
            </div>
          </div>
       
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form id="c_form-h" class="" method="post" action="<?php echo site_url('clientes/cadastrar')?>">

          <div class="form-group row">
              <label class="col-2" for="nome">Nome</label>
              <div class="col-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="NOME" required></div>
            </div>

            <div class="form-group row"> 
              <label for="email" class="col-2 col-form-label">E-mail</label>
              <div class="col-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required> </div>
            </div>

            <div class="form-group row">
              <label class="col-2" for="contato">Contato</label>
              <div class="col-10">
                <input type="text" class="form-control" id="contato" name="contato" placeholder="CELULAR OU TELEFONE" required></div>
            </div>

            <div class="form-group row">
              <label class="col-2" for="endereco">Endereco</label>
              <div class="col-10">
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="ENDEREÇO" required></div>
            </div>
          
    
           
           
            
            </div><button type="submit" class="btn btn-primary" contenteditable="true">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>

</html>