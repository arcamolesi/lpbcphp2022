<?php 
    include 'conexao.php'; 
    $id = trim($_POST['id']); 
    $rua = trim($_POST['txt_Rua']); 
    $bairro = trim($_POST['txt_Bairro']);
    $cidade = trim($_POST['txt_Cidade']); 
    $status = trim($_POST['txt_Status']);

    if (!empty($id) && !empty($rua) && !empty($bairro) && !empty($cidade) && !empty($status)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE imovel SET rua=?, bairro=?,cidade=?,status=? WHERE id=?"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($rua, $bairro, $cidade, $status, $id));
        Conexao::desconectar(); 
    }
    header("location:lstimovel.php");
    
    ?> 