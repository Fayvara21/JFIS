<?php
    require_once './connect_db.php';
    if (isset($_SESSION['user'])) {
        header('Location: index.php');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $user = $statement->fetch();
        if ($user) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: index.php');
        } else {
            $error = 'Nom d\'utilisateur ou mot de passe incorrect';
        }

    }
    require_once './templates/head.php';
?>

   <div class="container">
       <h1>Connexion</h1>
       <div class="error">
           <?php if (isset($error)) {
               echo $error;
           } ?>
       </div>
         <form action="login.php" method="post">
              <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" class="form-control">
              </div>
              <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
             <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
         </form>
   </div>

<? require_once './templates/footer.php' ?>
