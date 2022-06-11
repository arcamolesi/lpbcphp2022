<?php 
 // include 'menu.php'; 
  include 'conexao.php';
  $pdo = Conexao::conectar(); 
  $sql = "select * from imovel order by rua;";
  $lstImovel = $pdo->query($sql); 


  $sql = "Select * from locador order by nome"; 
  $lstLocador = $pdo->query($sql); 

  Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">

    </script>
    <title>Inserir Locação</title>
</head>

<body>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Inserir Locação</h1>
        </div>
        <div class="row">
            <form action="insLocacao.php" method="POST" id="frmInsLoc" name="frmInsLoc" class="col s12">
                <div class="input-field col s8">
                    <label for="lblImovel" class="black-text bold">Escolha o Imovel:</label>
                    <div class="input-field col s8">
                        <select id="slcImovel" name="slcImovel">
                            <option value="" disabled selected>Escolha um Imóvel</option>
                            <?php  // carregar lista no select option
					            foreach ($lstImovel as $imovel){?>
                            <option value="<?php echo $imovel['id']; ?>"><?php echo $imovel['rua']; ?></option>
                            <?php
					          }
				          ?>
                        </select>
                    </div>

                    <div class="input-field col s8">
                        <label for="lblLocador" class="black-text bold">Escolha o Locador:</label>
                        <br />
                        <div class="input-field col s8">
                            <select id="slcLocador" name="slcLocador">
                                <option value="" disabled selected>Escolha um Locador</option>
                                <?php  // carregar lista no select option
					            foreach ($lstLocador as $locador){?>
                                <option value="<?php echo $locador['id']; ?>"><?php echo $locador['nome']; ?></option>
                                <?php
					          }
				          ?>
                            </select>
                        </div>
                    </div>

                    <div class="input-field col s8">
                        <label for="lblLocador" class="black-text bold">Informa a Data de Locação:</label>
                        <br />
                        <div class="input-field col s12">
                            <input id="txtData" name="txtData" type="date">
                        </div>
                    </div>

                    <div class="input-field col s8">
                        <label for="lblLocador" class="black-text bold">Informe o valor do aluguel:</label>
                        <br />
                        <div class="input-field col s12">
                            <input id="txtValor" name="txtValor" type="text">
                        </div>
                    </div>

                    <div class="input-field col s8">
                    </div>
            </form>
        </div>

    </div>
</body>

</html>

<script>
$(document).ready(function() {
    $('select').material_select();
});
</script>