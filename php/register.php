<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/a.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
  </head>
<body>
    <h1>JFIS</h1>
    <div class="ombres_multiples_diffuses" id="registration-form">
        <form action="process_inscription.php" method="post">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
  
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
  
            <label for="pseudo">Pseudo :</label>
            <input type="text" id="pseudo" name="pseudo" required>
  
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
  
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="anniversaire">Date d'anniversaire :</label>
            <input type="date" id="anniversaire" name="anniversaire" required>

            <label for="telephone">Numéro de téléphone :</label>
            <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" placeholder="1234567890" required>

            <button class="ombres_multiples_diffuses" type="submit">S'inscrire</button>
            <p>ou</p>
            <a class="ombres_multiples_diffuses" href="home.php" target="_blank" >Vous avez déjâ un compte</a>
        </form>
    </div>
    <h2>BTL 2024</h2>
</body>
</html>
