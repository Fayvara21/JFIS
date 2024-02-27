<<<<<<< HEAD
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
>>>>>>> L
<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'jefis';
$port = 3306;

//On essaie de se connecter
try{
    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo 'Connexion réussie';
}
    /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
<<<<<<< HEAD
try {
echo "<h1>(.)(.)</h1>";
$sql = "SELECT * FROM users";
//$sql = " INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `profile_picture`, `email`, `password`, `birthday`, `phone`, `active`, `created_at`) VALUES (NULL, 'Moi2', 'Mwa', 'me', '', 'moi@mwa.fr', 'moi', '2024-02-16', '0707070707', '1', '2024-02-23 08:26:13.000000')";
$pdo->exec($sql);
echo "Nouveau compte créer";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  $conn = null

?>
=======
?>
</body>
</html>
>>>>>>> L
