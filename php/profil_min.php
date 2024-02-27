<?php 

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

    $image = $_FILES['image']['tmp_name'];
    $imageData = base64_encode(file_get_contents($image));
    //echo $imageData;
    $pfp='<img src="data:image/jpeg;base64,'.$imageData.'">';
    $query = "UPDATE `users` SET `profile_picture` = :pfp WHERE `id` = :id";
    $statement = $conn->prepare($query);
    $statement->bindValue(':id', 3);
    $statement->bindValue(':pfp', $pfp);
    $statement->execute();
    
    echo "Image uploaded and inserted into database successfully.";
    header('Location: profil.php');
} else {
    echo "Error uploading image.";
    echo ''. $_FILES['image']['name'] .'';
}


