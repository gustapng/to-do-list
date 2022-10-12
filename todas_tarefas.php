<?php

	$acao = 'recuperar';
	require 'tarefa.controller.php';

    // echo '<pre>';
	// print_r($tarefas);
	// echo '</pre>';

?>

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
    <script>
        function editar(id, txt_tarefa) {
        //criar um form de edição
        let form = document.createElement('form')
        form.action = 'todas_tarefas.php?pag=todas_tarefas&acao=atualizar'
        form.method = 'post'
        form.className = 'row'

        //criar um input para entrada do texto
        let inputTarefa = document.createElement('input')
        inputTarefa.type = 'text'
        inputTarefa.name = 'tarefa'
        inputTarefa.className = 'col-9 form-control'
        inputTarefa.value = txt_tarefa

        //criar um input hidden para guardar o id da tarefa
        let inputId = document.createElement('input')
        inputId.type = 'hidden'
        inputId.name = 'id'
        inputId.value = id

        //criar um button para envio do form
        let button = document.createElement('button')
        button.type = 'submit'
        button.className = 'col-3 btn btn-info'
        button.innerHTML = 'Atualizar'

        //incluir inputTarefa no form
        form.appendChild(inputTarefa)

        //incluir inputId no form
        form.appendChild(inputId)

        //incluir button no form
        form.appendChild(button)

        //teste
        //console.log(form)

        //selecionar a div tarefa
        let tarefa = document.getElementById('tarefa_'+id)

        //limpar o texto da tarefa para inclusão do form
        tarefa.innerHTML = ''

        //incluir form na página
        tarefa.insertBefore(form, tarefa[0])

        }

        function remover(id) {
        location.href = 'todas_tarefas.php?pag=todas_tarefas&acao=remover&id='+id;
        }

        function marcarRealizada(id) {
        location.href = 'todas_tarefas.php?pag=todas_tarefas&acao=marcarRealizada&id='+id;
        }
    </script>
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
                        <button class="div-ativa">
                            <p>Todas tarefas</p>
                        </button>
                    </a>
                    <a href="nova_tarefa.php">
                        <button class="opcoes-div2 position-absolute fixed-bottom">
                            <p>Nova tarefa  <i class="fa-regular fa-square-plus"></i></p>
                        </button>
                    </a>
                </div>
                <div class="col-md-9 coluna-direita">
                    <h3 class="text-center mt-4 mb-4">Todas tarefas</h3>

                    <?php foreach($tarefas as $indice => $tarefa) { ?>
                        <div class="row mb-3 d-flex align-items-center tarefa">
                            <div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
                                <?= $tarefa->tarefa ?> (<?= $tarefa->status ?>)
                            </div>
                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                <i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?= $tarefa->id ?>)"></i>
                                
                                <?php if($tarefa->status == 'pendente') { ?>
                                    <i class="fas fa-edit fa-lg text-info" onclick="editar(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>')"></i>
                                    <i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?= $tarefa->id ?>)"></i>
                                <?php } ?>
                            </div>
                        </div>
                        <hr>
                    <?php } ?>

                </div>
            </div>
        </div>
    </main>
    <!-- FIm main -->

    <script src="https://kit.fontawesome.com/4644a15bdd.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>