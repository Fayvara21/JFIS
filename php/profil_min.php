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

    echo"connection réussie <br>";

} catch (PDOException $e) { 
    echo "connection échouée ". $e->getMessage();
}

if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
    try{

   
    $image = $_FILES['image']['tmp_name'];
    $imageData = base64_encode(file_get_contents($image));
    
    
    $statement = $conn->prepare("UPDATE `users` SET `profile_picture` = :pfp WHERE `id` = :id");
    $statement->bindValue(':id', $_SESSION['user']['id']);
    $statement->bindValue(':pfp', $imageData);
    
    $statement->execute();
    echo "Image uploaded and inserted into database successfully.";
    //header('Location: profil.php'); 
}
catch (PDOException $e) {  
    echo 'error uploading image'. $e->getMessage();
}
    
}


