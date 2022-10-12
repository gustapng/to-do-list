<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <!-- Favicon -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap -->
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Css -->
    <title>To do app</title>
</head>
<body>

    <!-- Início cabecalho -->
    <header>

      <nav class="navbar navbar-expand-md">
        <div class="container">

            
            <a class="navbar-brand">
                <div class="row">
                    <img src="img/icon.png" alt="icon_gustavo" width="30" height="30">
                    <p>TO DO LIST</p>
                </div>
            </a>

            <div class="icones-redes">
                <a href="https://www.instagram.com/guustaferreira/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/gustavo-ferreirapng/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/gustapng" target="_blank"><i class="fa-brands fa-square-github"></i></a>
            </div>

        </div>
      </nav>
      
    </header>

    
    <!-- Fim cabecalho -->

    <!-- Início main -->
    <main>
        <div class="container">
            <div class="row mt-4 coluna-esquerda">
                <div class="col-md-3">
                    <div class="row opcoes-divicon">
                        <div class="ml-auto mr-auto">
                            <img src="img/icone_gustavo.png" alt="icon_gustavo" width="21" height="21">
                            <p>Gustavo Ferreira</p>
                        </div>
                    </div>
                    <a href="index.php">
                        <button class="opcoes-div">
                            <p>Tarefas pendentes</p>
                        </button>
                    </a>
                    <a href="todas_tarefas.php">
                        <button class="opcoes-div">
                            <p>Todas tarefas</p>
                        </button>
                    </a>
                    <a href="#">
                        <button class="div-ativa position-absolute fixed-bottom">
                            <p>Nova tarefa  <i class="fa-regular fa-square-plus"></i></p>
                        </button>
                    </a>
                </div>
                <div class="col-md-9 coluna-direita">

                    <h3 class="text-center mt-4 mb-4">Nova tarefa</h3>

                    <form method="post" action="tarefa.controller.php?acao=inserir">
                        <div class="form-group">
                            <label>Descrição da tarefa:</label>
                            <input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
                        </div>

                        <button class="btn btn-success">Cadastrar</button>
                    </form>

                    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
            
                    <div class="bg-success pt-3 pb-1 text-white d-flex justify-content-center" style="margin-top: 275px;">
                        <h5>Tarefa inserida com sucesso!</h5>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <!-- Fim main -->

    <script src="https://kit.fontawesome.com/4644a15bdd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>