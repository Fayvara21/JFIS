<?php 

$servername = "localhost";
$username = "root";
$password = "";
$database = "jfis";  
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
            $sql = "INSERT INTO `posts` (`id`, `content`, `created_at`, `id_users`) VALUES (NULL, :content, '2024-02-26 10:57:43.000000', '7'); ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':content', $content);
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