<?php
require_once 'check_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/accueil.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="UTF-8">
</head>

<body>
<script src="https://kit.fontawesome.com/bb627f976a.js" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/messages.js"></script>


  <ul id="slide-out" class="sidenav sidenav-fixed">
    <div>

        <li><a class="subheader">JFIS</a></li>
        <li><a class="devider"></a></li>
        <li><a class="waves-effect" href="#!">Page d'accueil <i class="fa-solid fa-house"></i></a></li> 
        <li><a class="waves-effect" href="./post.php">Ecrire un poste <i class="fa-solid fa-pen"></i></a></li>
        <li><a class="waves-effect" href="./messages_select.php">Peoples <i class="fa-solid fa-person"></i></a></li>
        <li><a class="waves-effect" href="./messages.php">Message privé <i class="fa-solid fa-message"></i></a></li>
        
      </div>

      <div>
      <li><a class="waves-effect" href="./profil.php">Profil <i class="fa-solid fa-user"></i></a></li>
      <li><a class="waves-effect" href="./logout.php">Déconnexion <i class="fa-solid fa-right-to-bracket"></i></a></li>

    </div>

  </ul>
  <nav>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
  </nav>
  <main>
    <div class="chat">
      <?php include "update_post_min.php";
      foreach ($result as $x) { 
        $likedPost = $pdo->prepare('SELECT * FROM `like_posts` WHERE id_users = :id_users AND id_posts = :id_posts');
        $likedPost->bindValue(':id_posts', $x["id"]);
        $likedPost->bindValue(':id_users', $user['id']);
        $likedPost->execute();
        $isLike = $likedPost->fetch();
        if (!$isLike) {
          $isLike = false;
        }else{
          $isLike = true;
        }
        ?>
        <div class='caca'>
        Post de : <?=  $x["username"] ?><br><?= $x["content"] ?><br><?= $x["created_at"] ?><br>
        <form method="POST" class='like' action="update_like.php">
          <input name="formId" type="hidden" value="<?= $x["id"] ?>">
          <button type="submit" <?php 
          if ($isLike) {
            echo 'class="liked"';
          }
          
          ?>><i class='fa-solid fa-heart'></i></button>
        </form>
        <form action="new_comment.php" method="POST" name="commenta"> 
           <button ><i class='fa-regular fa-comment'></i></button>
      </form>

        </div>
        <?php
      }
      ?>
    </div>

  </main>

    </ul>
    <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
    </nav>

    <main>
    <div class="chat">
      <?php include "update_post_min.php";
      foreach ($result as $x) {
        echo "<div class='caca'>";
        echo "Post de : " . $x["username"] .  "<br>" . $x["content"] . "<br>";
        echo "<button><i class='fa-solid fa-heart'></i></button>";
        echo "<button><i class='fa-regular fa-comment'></i></button>";

        echo "</div>";
      }

      ?>
    </div>>

  </main>
  </body>
</html>
