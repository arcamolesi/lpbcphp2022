<?php
   include 'menu.php'; 
   include 'conexao.php';
   $pdo = Conexao::conectar(); 
   $sql = "select * from imovel order by rua;";
   $lstImovel = $pdo->query($sql); 
   Conexao::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!-- Configuração dos ícones -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Listar Imóveis</title>

</head>

<body>
    <div class="container ">
        <h1 class="light-green lighten-4">Listar Imóveis</h1>
        <table class="striped">
            <tr>
                <th>ID</th>
                <th>RUA</th>
                <th>BAIRRO</th>
                <th>CIDADE</th>
                <th>STATUS</th>
                <th class="center">FUNÇÕES</th>
                <th>
                    <a class="btn-floating btn-small waves-effect waves-light green"
                        onclick="JavaScript:location.href='frmInsImovel.php'">
                        <i class="material-icons">add</i>
                    </a>
                </th>
            </tr>

            <?php 
           foreach($lstImovel as $imovel){
        ?>
            <tr>
                <td><?php echo $imovel['id']?></td>
                <td><?php echo $imovel['rua']?></td>
                <td><?php echo $imovel['bairro']?></td>
                <td><?php echo $imovel['cidade']?></td>
                <td><?php echo $imovel['status']?></td>
                <td class="center">
                    <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEdtImovel.php?id=' + 
                           <?php echo $imovel['id'];?>">
                        <i class="material-icons">edit</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript:remover(<?php echo $imovel['id'];?>)">
                        <i class="material-icons">delete</i>
                    </a>
                    <a class="btn-floating btn-small waves-effect waves-light light-blue darken-3" onclick="JavaScript:location.href='frmDetImovel.php?id=' + 
                           <?php echo $imovel['id'];?>">
                        <i class="material-icons">info</i>
                    </a>

                </td>
                <td></td>
            </tr>
            <?php } ?>
        </table>
    </div>
           </br>
           </br>
    <?php include 'footer.php'?>
</body>

</html>

<script>
function remover(id) {
    if (confirm('Excluir o imóvel ' + id + '?')) {
        location.href = 'remImovel.php?id=' + id;
    }
}
</script>