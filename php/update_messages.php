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
            $currentDateTime = date('Y-m-d H:i:s');
            $sql = "INSERT INTO `messages` (`id`, `content`, `is_read`, `created_at`, `id_users`, `id_users_recieve`) VALUES (NULL, :message, '0', :created_at, '2', '4')";            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':message', $message);
            $stmt->bindParam(':created_at', $currentDateTime);  
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