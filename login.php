<?php
    $user = trim($_POST['user']); 
    $pwd = trim($_POST['password']); 

    // echo $user . " - " .$pwd

   include 'conexao.php';
   $sql = "select * from usuario where login LIKE ?";
   $pdo = Conexao::conectar(); 
   $query = $pdo->prepare($sql);
   $query->execute (array($user));
   $dados = $query->fetch(PDO::FETCH_ASSOC);
   Conexao::desconectar(); 

   echo $pwd . " - " . $dados['password']; 

   if (md5($pwd) == $dados['password']){
    //  echo "passei aqui"; 
      session_start();
      $_SESSION['login'] = $dados['login'];
      $_SESSION['pwd'] = $dados['password']; 
     header("location:menu.php");
   }
?>