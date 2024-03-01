<?php 
require_once './check_login.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jefis";  
    $port = 3306;

 


    $id_users = $_SESSION['user']['id'];
    $id_users_recieve = $_SESSION['user_recieve'];
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT m.content, u1.username AS sender_username, u2.username AS recipient_username, m.created_at FROM messages m JOIN users u1 ON m.id_users = u1.id JOIN users u2 ON m.id_users_recieve = u2.id WHERE ((m.id_users = :id_users AND m.id_users_recieve = :id_users_recieve) OR (m.id_users = :id_users_recieve AND m.id_users_recieve = :id_users))  ORDER BY m.created_at ASC"); 
    $sql->bindParam(":id_users", $id_users, PDO::PARAM_INT);
    $sql->bindParam(":id_users_recieve", $id_users_recieve, PDO::PARAM_INT);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($result);

?>