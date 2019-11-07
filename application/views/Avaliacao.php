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
  <div class="py-5 text-center">
    <div class="container">
      <div class="row" style="">
        <div class="mx-auto col-lg-6 col-10">
          <h1>Avaliação</h1>
          <p class="mb-3">Avalie aqui os profissionais de Saúde com quem teve atendimento com uma nota de 0 a 5 (0: péssimo!, 5: muito bom!) e um comentário.</p>
          <form class="text-left" method="post" action="<?php echo site_url('Avaliacao/cadastrar')?>">
            <div class="form-group">
              <label for="nome">Pesquise o Profissional a ser Avaliado</label>
              <input type="text" class="form-control" placeholder="NOME" id="autocomplete" name="nome" required></div>
            <div class="form-group"> 
              <label for="titulo">Titulo da Avaliação</label> 
              <input type="text" class="form-control" id="titulo" name="titulo" placeholder="De um nome para sua avaliação" required> </div>
            <div class="form-group">
            <label for="comentario">Comentário</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3" placeholder="Escreva um comentário referente ao profissional." required></textarea></div>
            <div class="form-group">
              <label for="nota">Nota de 0 a 5</label>
          <select class="custom-select" id="nota" name="nota" required>
              <option selected="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>

              <label for="especialidade">Especialidade</label>
          <select class="custom-select" id="especialidade" name="especialidade" required>
              <option selected="Cardiologista">Cardiologista</option>
                <option value="Oftalmologista">Oftalmologista</option>
              </select>
            </div>
</div>
</div>
</br>
            <button type="submit" class="btn btn-primary">Enviar Avaliação</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script>
   $('#autocomplete').autocomplete({
    serviceUrl: '/autocomplete/nome',
    onSelect: function (suggestion) {
        alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
    }
});
</script>
  
</body>

</html>

