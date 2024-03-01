<?php 
  require_once './check_login.php';
    $sql = $pdo->prepare("SELECT `posts`.*, `users`.username FROM `posts` JOIN users WHERE posts.id_users = users.id ORDER BY posts.created_at DESC;");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
   
   
   


    
?>