<?php 
    include 'conexao.php'; 

    $rua = trim($_POST['txt_Rua']); 
    $bairro = trim($_POST['txt_Bairro']);
    $cidade = trim($_POST['txt_Cidade']); 
    $status = trim($_POST['txt_Status']);

    if (!empty($rua) && !empty($bairro) && !empty($cidade) && !empty($status)){
        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "INSERT INTO imovel(rua, bairro, cidade, status) VALUES (?,?,?,?)"; 
        $query = $pdo->prepare($sql);
        $query->execute(array($rua, $bairro, $cidade, $status));
        Conexao::desconectar(); 
    }
    header("location:lstimovel.php"); 
?> 