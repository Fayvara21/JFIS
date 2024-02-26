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

    <main>
<?php include "update_post.php" ?>
    <form method="POST">
    <textarea name="content" id="content" type="text" placeholder="Entrer du texte"></textarea>
    <input id="submit" type="submit" value="Envoyer">
    <script>
        document.getElementById("submit").addEventListener("submit", function(){
        
        
        var form_data = new FormData(document.getElementById("content"));
        if(document.getElementById("content").value != ""){
            fetch('update_post.php', 
            {
            method: 'POST',
            body: form_data
            }).then(response => response.text())
            .catch(error => {console.error('error submit_form')})
            document.getElementById("content").value = "";
        }
        });
        </script>
    
    </form> 
    </main>
<ul id="slide-out" class="sidenav sidenav-fixed" >
      
      <li><a class="subheader">JFIS</a></li>
      <li><a class="waves-effect" href="#!">Page d'acceuil</a></li>
      <li><a class="waves-effect" href="#!">Ecrire un poste</a></li>
      <li><a class="waves-effect" href="#!">Envoyer un message privé</a></li>
      <li><a class="waves-effect" href="#!">Informations du compte</a></li>
      <li><a class="waves-effect" href="#!">Paramètres</a></li>

    </ul>
</body>
</html>>