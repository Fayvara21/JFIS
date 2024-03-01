<?php
    require_once 'check_login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/messages.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
</head>
<body>
    <script src="https://kit.fontawesome.com/bb627f976a.js" crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/bb627f976a.js" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/messages.js"></script>
  <script> function scroll_from_bottom() { window.scrollTo(0, document.body.scrollHeight) } window.onload=scroll_from_bottom; window.onkeyup=scroll_from_bottom; </script>

  
  <header>
  <ul id="slide-out" class="sidenav sidenav-fixed" >
      <div>

        <li><a class="subheader">JFIS</a></li>
        <li><a class="devider"></a></li>
        <li><a class="waves-effect" href="./accueil.php">Page d'accueil <i class="fa-solid fa-house"></i></a></li> 
        <li><a class="waves-effect" href="./post.php">Ecrire un poste <i class="fa-solid fa-pen"></i></a></li>
        <li><a class="waves-effect" href="./messages_select.php">Peoples <i class="fa-solid fa-person"></i></a></li>
        <li><a class="waves-effect" href="#!">Message privé <i class="fa-solid fa-message"></i></a></li>
      </div>

      <div>

      <li><a class="waves-effect" href="./profil.php">Profil <i class="fa-solid fa-user"></i></a></li>
      <li><a class="waves-effect" href="../php2/logout.php">Déconnexion <i class="fa-solid fa-right-to-bracket"></i></a></li>

      </div>

    </ul>
    <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons" style="font-size: 48px; color:white;">menu</i></a>
    </nav>
  </header> 

  <main>

    <div id="chat" class="chat">
      <script>
        function update_chat() {
          $.ajax ({
            url: 'update_messages_min.php',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
              $('#chat').empty();
              
              $.each(data, function(index, item){
                $('#chat').append('<p><img src="data:image/jpeg;base64,'+item.profile_picture+'">'+item.id_users+' to '+item.id_users_recieve+' said: '+item.content+'</p><br>');
                
              });
              
            },
            error:function(xhr, status, error){
              console.error('erreur: ', error);
            }
          });
        }
        update_chat();
        setInterval(update_chat, 3000);

      </script>
      <?php include "update_messages.php" ?>
      </div>

    <div class="chatbox superblack">
      <div> 
          
          <form id="chat_input" class="chat_input">

            <script>
              document.getElementById("chat_input").addEventListener("submit", function(event){
                event.preventDefault();
                
                var form_data = new FormData(document.getElementById("chat_input"));
                if(document.getElementById("message").value != ""){
                  fetch('update_messages.php', 
                  {
                    method: 'POST',
                    body: form_data
                  }).then(response => response.text())
                  .catch(error => {console.error('error submit_form')})
                  document.getElementById("message").value = "";
                  update_chat();
                }
              });

            </script>

            <input id="message" class="message" type="text" name="text_input" placeholder="Envoyer un message" oninput="count_letters()">
            <p id="counter">255 </p>
            
            <script>
              function count_letters(){
                let textlen = document.getElementById('message').value.length;
                document.getElementById('counter').innerText = 255 - textlen;
                
              }

            </script>


          </form>
          
      </div>
    </div>
    

  </main>

  
  

</body>
</html>
