<?php
    require_once 'php/connect_db.php';
    if (isset($_SESSION['user'])) {
        header('Location: index.php');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE username = :username LIMIT 1";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        $user = $statement->fetch();

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: php/accueil.php');
        } else {
            $error = 'Nom d\'utilisateur ou mot de passe incorrect';
        }

    }
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href=".css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="./css/a.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
  </head>
  
  <body>
    <h1>JFIS</h1>
    <div class="error">
           <?php if (isset($error)) {
               echo $error;
           } ?>
    <div class="ombres_multiples_diffuses" id="connection">
      <form action="" method="post">
          <label for="username">Pseudo :</label>
          <input type="text" id="username" name="username" required>

          <label for="mot_de_passe">Mot de passe :</label>
          <input type="password" id="password" name="password" required>

          <button class="ombres_multiples_diffuses" type="submit">Se connecter</button>
          <p>Vous n'avez pas de compte ?</p> <a class="ombres_multiples_diffuses" href="register.html" target="_blank" >Inscrivez-vous</a>
          <p>C'est facile et rapidze</p>
        </form>
    </div>
    <h2>BTL 2024</h2>
    
  </body>
</html> 
