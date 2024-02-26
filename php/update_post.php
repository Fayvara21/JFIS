<?php 


    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    //}
    //else{
    //    echo"no";
    //}

    








   
      
?>