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
    
    <title>Inserir Novo Imóvel</title>
</head>
<body>
    <div class="container indigo lighten-3 black-text col s12">
        <div class="center grey col s12">
            <h1>Inserir Novo Imóvel</h1>
        </div>
        <div class="row">
            <form action="insImovel.php" method="post" id="frmInsImov" name="frmInsImov" class="col s12">
                <div class="input-field col s8">
                    <label for="lblRua" class="black-text bold">Informe a Rua ou Avenida:</label>
                    <input id="txt_rua" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblBairro" class="black-text bold">Informe o Bairro:</label>
                    <input id="txt_bairro" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblCidade" class="black-text bold">Informe a Cidade:</label>
                    <input id="txt_cidade" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblStatus" class="black-text bold">Informe a Situação (Status):</label>
                    <input id="txt_status" type="text">
                </div>
                <div class="grey darken-2 center col s12">
                   <br/>
                   <button class="btn waves-effect waves-light green" type="submit" name="btnEnviar">Gravar
                       <i class="material-icons right">save</i>
                   </button>
                   <button class="btn waves-effect waves-light red" type="reset" name="btnLimpar">Limpar
                       <i class="material-icons right">clear_all</i>
                   </button>
                   <button class="btn waves-effect waves-light blue" type="button" name="btnVoltar"
                   onclick="JavaScript:location.href='lstImovel.php'">Voltar
                       <i class="material-icons right">arrow_back</i>
                   </button>     
                   <br/>
                   <br/>
                </div>
            </form>
        </div>     
    </div>
</body>
</html>