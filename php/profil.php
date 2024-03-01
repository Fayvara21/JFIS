<?php
    require_once 'check_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/messages.css"> 
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
</head>
<body>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/messages.js"></script>
  <script> function scroll_from_bottom() { window.scrollTo(0, document.body.scrollHeight) } window.onload=scroll_from_bottom; window.onkeyup=scroll_from_bottom; </script>




<ul id="slide-out" class="sidenav sidenav-fixed" >
      <div>

        <li><a class="subheader">JFIS</a></li>
        <li><a class="devider"></a></li>
        <li><a class="waves-effect" href="#!">Page d'accueil</a></li>
        <li><a class="waves-effect" href="./post.php">Ecrire un poste</a></li>
        <li><a class="waves-effect" href="./messages.php">Message privé</a></li>
      </div>

      <div>
      <li><a class="waves-effect" href="#!">Informations du compte</a></li>
      <li><a class="waves-effect" href="#!">Paramètres</a></li>
      <li><a class="waves-effect" href="logout.php">Déconnexion</a></li>

      </div>

    </ul>
    <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
    </nav>

    <main>

    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jefis";  
    $port = 3306;


    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT username, first_name, last_name, birthday, email, phone, profile_picture FROM users WHERE id = :id");
    $sql->bindValue(':id', $_SESSION['user']['id']);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);

    echo "<p>username: " . $result['username'] 
    . "</p><p>firstname: " . $result['first_name'] 
    . "</p><p>lastname: ". $result['last_name'] 
    . "</p><p>birthday: ". $result['birthday'] 
    . "</p><p>email: ". $result['email'] 
    . "</p><p>phone: ". $result['phone'] 
    . "</p><p>profile picture: ". '<img src="data:image/jpeg;base64,'.$result['profile_picture'].'">' . '</p><p>';

?>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

<form action="profil_min.php" method="post" enctype="multipart/form-data">
  <input type="file" name="image" id="image" placeholder="photo de profil">
  <input type="submit" id="submit" value="Mettre a jour">

</form>
</main>
</body>
</html>