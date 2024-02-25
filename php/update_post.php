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
        $message = $_POST["text_input"];
        try {
            $sql = "INSERT INTO `messages` (`id`, `content`, `is_read`, `created_at`, `id_users`, `id_users_recieve`) VALUES (NULL, :message, '0', '2024-02-25 10:16:38.000000', '2', '6'); ";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':message', $message);
            $stmt->execute();
            header("Location:post.php");
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