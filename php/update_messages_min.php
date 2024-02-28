<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jefis";  
    $port = 3306;

 
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT first_name, last_name FROM users INNER JOIN messages ON users.id = messages.id_users;");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($result);

?>