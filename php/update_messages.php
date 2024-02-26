<?php 
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
        $post_id = $_POST["post_id"];
        try {
            $sql = "INSERT INTO `like_posts` (`id`, `created_at`, `id_users`, `id_posts`) VALUES (NULL, '2024-02-26 14:21:29.000000', '6', 'post_id'); ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            header("Location:messages.php");
        } 
        catch (PDOException $e) { //echo"". $e->getMessage();
        }
    }

    

    

    // try {

    //     $sql = $conn->prepare("SELECT * FROM messages");
    //     $sql->execute();
    //     $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
    //     foreach ($result as $row) {
    //     echo"". $row["id_users"] ." to ". $row["id_users_recieve"]." said :". $row["content"] ."". $row[""]."<br>";
    //     }

    // } catch (PDOException $e) {
    //     //echo "aucun message". $e->getMessage();
    // }













   
      
?>