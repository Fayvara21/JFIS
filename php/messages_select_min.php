<?php
require_once './check_login.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "jefis";  
$port = 3306;

$conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    

        $_SESSION['user_recieve']= $_POST['user'];
        
        //echo $_SESSION['user_recieve'].$_SESSION['user']['id']   ;
        header('Location: messages.php');

}
?>
