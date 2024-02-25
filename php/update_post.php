<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jefis";  
    
    try {
        $conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    } catch (PDOException $e) { 
        echo "connection échouée". $e->getMessage();
    }





    //REQUEST 
    // $conn = new mysqli($servername, $username, $password, $database);

    // if ($conn->connect_error) {
    //   die("connection échouée". $conn->connect_error);
    // }
    // $sql = "SELECT * FROM messages";
    // $result = $conn->query($sql);
    
    // if($result->num_rows > 0) {
    //     echo "<p>";
    //   while($row = $result->fetch_assoc()) {
    //     echo"id:".$row["id_users"]." id:".$row["id_users_recieve"]." message:".$row["content"]."<br>";
    //   }
    //   echo "</p>";
    // } 
    // else {
    //   echo "aucun résultats";
    // }
    //REQUEST
    












   
      
?>