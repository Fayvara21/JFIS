<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="./css/a.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
  </head>
  
  <body>
    <h1>JFIS</h1>
    <div class="ombres_multiples_diffuses" id="connection">
      <form action="process_inscription.php" method="post">
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required>

          <label for="mot_de_passe">Mot de passe :</label>
          <input type="password" id="mot_de_passe" name="mot_de_passe" required>

          <button class="ombres_multiples_diffuses" type="submit">Se connecter</button>
          <p>Vous n'avez pas de compte ?</p> <a class="ombres_multiples_diffuses" href="register.html" target="_blank" >Inscrivez-vous</a>
          <p>C'est facile et rapide</p>
        </form>
    </div>
    <h2>BTL 2024</h2>
  </body>
</html> 