<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <script src="https://kit.fontawesome.com/bb627f976a.js" crossorigin="anonymous"></script>
  <?php include "update_post.php" ?>
  <form method="POST">
    <textarea name="content" id="content" type="text" placeholder="Entrer du texte"></textarea>
    <input id="submit" type="submit" value="Envoyer">
    <script src="../js/materialize.min.js"></script>
    <script src="../js/messages.js"></script>
    <link rel="stylesheet" href="../css/post.css">
    <link rel="stylesheet" href="../css/materialize.min.css">



    <header>
      <ul id="slide-out" class="sidenav sidenav-fixed">
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
    </header>

    <main>


      <main>
        <?php require_once 'check_login.php';include "update_post.php" ;?>
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
