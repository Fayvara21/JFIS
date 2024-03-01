<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/messages.js"></script>
    <link rel="stylesheet" href="../css/post.css">
    <link rel="stylesheet" href="../css/materialize.min.css">



    <header>
      <ul id="slide-out" class="sidenav sidenav-fixed">
        <div>

          <li><a class="subheader">JFIS</a></li>
          <li><a class="devider"></a></li>
          <li><a class="waves-effect" href="./accueil.php">Page d'accueil</a></li>
          <li><a class="waves-effect" href="#!">Ecrire un poste</a></li>
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
    </header>

    <main>


      <main>
        <?php require_once 'check_login.php';include "update_comment.php" ;?>
        <p>Ajouter un commentaire au post</p>
        <form method="POST">
          <textarea name="content" id="content" type="text" placeholder="Entrer du texte"></textarea>
          <input id="submit" type="submit" value="Envoyer">


        </form>
</body>

</html>