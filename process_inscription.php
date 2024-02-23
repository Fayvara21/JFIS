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
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$pseudo = $_POST['pseudo'];
$email = $_POST['email'];
$mdp = $_POST['mot_de_passe'];
$anniv = $_POST['anniversaire'];
$tel = $_POST['telephone'];
  
try {
    $sql = " INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `profile_picture`, `email`, `password`, `birthday`, `phone`, `active`) VALUES (NULL, '$prenom', '$nom', '$pseudo', '', '$email', '$mdp', '$anniv', '$tel', '1')";
    $pdo->exec($sql);
    echo "Nouveau compte créer";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
      }
      $conn = null
     
?>
<html>
<meta http-equiv="refresh" content="0;URL=connexion_message.html">
</html>