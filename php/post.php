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
          <li><a class="waves-effect" href="logout.php">Déconnexion</a></li>
        </div>

      </ul>
      <nav>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
      </nav>
    </header>

    <main>


      <main>
        <?php include "update_post.php" ?>
        <form method="POST">
          <textarea name="content" id="content" type="text" placeholder="Entrer du texte"></textarea>
          <input id="submit" type="submit" value="Envoyer">
          <script>
            document.getElementById("submit").addEventListener("submit", function() {


              var form_data = new FormData(document.getElementById("content"));
              if (document.getElementById("content").value != "") {
                fetch('update_post_min.php', {
                    method: 'POST',
                    body: form_data
                  }).then(response => response.text())
                  .catch(error => {
                    console.error('error submit_form')
                  })
                document.getElementById("content").value = "";
              }
            });
          </script>

        </form>
</body>

</html>