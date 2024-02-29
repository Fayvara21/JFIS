<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jefis";  
    $port = 3306;

 
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT * FROM `posts` JOIN users WHERE posts.id_users = users.id;");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    
   
   


    
?>