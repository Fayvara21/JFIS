
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/post.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
</head>
<body>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  

  <ul class="right hide-on-med-and-down">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
  </ul>
  <ul id="slide-out" class="side-nav">
    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse" ><i class="mdi-navigation-menu"></i></a>




  <div class="chatbox superblack">
    <div> 
        <form class="chat_input">
          <a class="btn-floating sidenav-trigger grey" id="button"><i class="material-icons">add</i></a>
          <input class="message" type="text" placeholder="Envoyer un message">
        </form>
    </div>
  </div>
  <script src="../js/post.js"></script>

</body>
</html>