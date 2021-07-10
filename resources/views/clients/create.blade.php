<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Criar novo Cliente!</title>
  </head>
  <body>
    <div class="jumbotron">
        <center><h1 class="display-4">Criar novo Cliente!</h1></center>
        
    </div>
    <div class="container">
       <form>
            <div class="form-group col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group col-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group col-6">
                <label for="date_birth">Data de nascimento</label>
                <input type="date" class="form-control" id="date_birth" name="date_birth">
            </div>
            <div class="form-group col-6">
                <label for="password">Senha</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="row">
                <div class="col-1">
                    <input name="btn-gravar" id="btn-gravar" class="btn btn-success" type="button" value="Gravar"> 
                </div>
                <div class="col-1">
                    <input name="btn-voltar" id="btn-voltar" class="btn btn-danger" type="button" value="Voltar"> 
                </div>
                
                
            </div>
            
         </form> 
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>