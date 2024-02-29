<?php 
  require_once 'check_login.php';  

$servername = "localhost";
$username = "root";
$password = "";
$database = "jefis";  
$port = 3306;

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo"connection réussie <br>";

} catch (PDOException $e) { 
    //echo "connection échouée ". $e->getMessage();
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $content = $_POST["content"];
        try {
            var_dump($_SESSION);
            $sql = "INSERT INTO `posts` (`id`, `content`, `id_users`) VALUES (NULL, :content, :id_users)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':id_users', $_SESSION['user']['id']);
            $stmt->execute();
            header("Location:post.php");
            echo 'yes';
        } 
        catch (PDOException $e) { echo"error". $e->getMessage();
        }
    }
    // else{
    //    echo"no";
    // }








   
      
?>