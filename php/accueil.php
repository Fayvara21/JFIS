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
    <link rel="stylesheet" href="../css/accueil.css"> 
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
</head>
<body>
<script src="https://kit.fontawesome.com/bb627f976a.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/messages.js"></script>
  <script> function scroll_from_bottom() { window.scrollTo(0, document.body.scrollHeight) } window.onload=scroll_from_bottom; window.onkeyup=scroll_from_bottom; </script>


<ul id="slide-out" class="sidenav sidenav-fixed" >
      <div>

        <li><a class="subheader">JFIS</a></li>
        <li><a class="devider"></a></li>
        <li><a class="waves-effect" href="#!">Page d'accueil <i class="fa-solid fa-house"></i></a></li> 
        <li><a class="waves-effect" href="#!">Ecrire un poste <i class="fa-solid fa-pen"></i></a></li>
        <li><a class="waves-effect" href="#!">Message privé <i class="fa-solid fa-message"></i></a></li>
      </div>

      <div>
      <li><a class="waves-effect" href="#!">Compte <i class="fa-solid fa-user"></i></a></li>
      <li><a class="waves-effect" href="#!">Paramètres <i class="fa-solid fa-gear"></i></a></li>
      <li><a class="waves-effect" href="../php2/logout.php">Déconnexion <i class="fa-solid fa-right-to-bracket"></i></a></li>

      </div>

    </ul>
    <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
    </nav>
</body>
</html>
