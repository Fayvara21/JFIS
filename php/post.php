
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/post.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
</head>
<body>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../js/materialize.min.js"></script>


  <header>
    <ul id="slide-out" class="sidenav sidenav-fixed" >
      
      <li><a class="subheader">JFIS</a></li>
      <li><a class="waves-effect" href="#!">Page d'acceuil</a></li>
      <li><a class="waves-effect" href="#!">Ecrire un poste</a></li>
      <li><a class="waves-effect" href="#!">Envoyer un message privé</a></li>
      <li><div class="divider"></div></li>
      <li><a class="waves-effect" href="#!">Informations du compte</a></li>
      <li><a class="waves-effect" href="#!">Paramètres</a></li>

    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
  </header>

  <main>

    <p class="chat">

      <?php include "update_post.php" ?>
    </p>

    <div class="chatbox superblack">
      <div> 
          
          <form class="chat_input" method="post" action="">
            <a class="btn-floating sidenav-trigger grey" id="button"><i class="material-icons">add</i></a>
            <input class="message" type="text" name="text_input" placeholder="Envoyer un message">
          </form>
      </div>
    </div>
    <script src="../js/post.js"></script>

  </main>

  
  

</body>
</html>