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

  
  <header>
    <ul id="slide-out" class="sidenav sidenav-fixed" >
      
      <li><a class="subheader">JFIS</a></li>
      <li><a class="waves-effect" href="./accueil.php">Page d'acceuil</a></li>
      <li><a class="waves-effect" href="./post.php">Ecrire un poste</a></li>
      <li><a class="waves-effect" href="./messages.php">Envoyer un message privé</a></li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="#!">Informations du compte</a></li>
      <li><a class="waves-effect" href="#!">Paramètres</a></li>
      <li><a class="waves-effect" href="logout.php">Déconnexion</a></li>
    </ul>
    <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
    </nav>
  </header> 

  <main>

x
    

  </main>

  
  

</body>
</html>
