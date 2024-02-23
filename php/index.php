<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
?>
</body>
</html>