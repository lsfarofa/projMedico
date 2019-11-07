<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/theme.css" type="text/css">
  
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-primary">
    
    <div class="container"> <a class="navbar-brand" href="#">
        <i class="fa d-inline fa-lg fa-stop-circle"></i>
        <b> Avaliação Médicos</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar16">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar16">
        <ul class="navbar-nav ml-auto">
          <div class="col-md-6" style="">
            <div class="btn-group">
              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Categorias</button>
              <div class="dropdown-menu"> 
                <a class="dropdown-item" href="<?php echo site_url('Medicos')?>">Lista Médicos </a>
                
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </div>
          <div class="col-md-2 " style="">
            <div class="btn-group">
              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Entrar</button>
             
              <div class="dropdown-menu">
                <form class="p-3" method="POST" action="<?php echo site_url('login/autenticar')?>">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" required>
                  </div>
                  <div class="form-group">
                    <label for="senha">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" placeholder="SENHA" required>
                  </div>

                  <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('login/novo') ?>">Não é cadastrado? Cadastra-se aqui!</a>
                <a class="dropdown-item" href="#"></a>
              </div>
            </div>
          </div>
        </ul> 
        
      </div>
    </div>  
  </nav>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
          <form class="text-left" method="get" action="<?php echo site_url('Medicos')?>">
            <div class="form-group">
              <label for="nome">Pesquise o Profissional a ser Avaliado</label>
              <input type="text" class="form-control" placeholder="PESQUISAR NOME OU CRM" id="nome" name="q">
            </div>
              <button class="btn btn-primary" >Pesquisar</button>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-lg-5 col-md-7 col-10">
          <h1>Seja bem vindo</h1>
          
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-center text-md-right" style="background-image: url(https://static.pingendo.com/cover-bubble-dark.svg);	background-position: right bottom;	background-size: cover;	background-repeat: repeat; background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="p-5 mx-auto mx-md-0 ml-md-auto col-10 col-md-9">
          <h3 class="display-3"></h3>
          <p class="mb-3 lead">TEXTO.</p>
          
        </div>
      </div>
    </div>
  </div>
 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>

</html>