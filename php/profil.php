<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jefis";  
    $port = 3306;

 
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $conn->prepare("SELECT username, first_name, last_name, birthday, email, phone, profile_picture FROM users WHERE id = :id");
    $sql->bindValue(':id', 3);
    $sql->execute();
    $result = $sql->fetch(PDO::FETCH_ASSOC);
    
    echo "<p>username: " . $result['username'] . "</p><p>firstname: " 
    . $result['first_name'] . "</p><p>lastname: ". $result['last_name'] . "</p><p>birthday: "
    . $result['birthday'] . "</p><p>email: ". $result['email'] . "</p><p>phone: "
    . $result['phone'] . "</p><p>profile picture: ". $result['profile_picture'] . '</p><p>';
?>

      <script type="text/javascript" src="../js/materialize.min.js"></script>

    <form action="profil_min.php" method="post">
      <input type="file" name="pfp" id="pfp" placeholder="photo de profil">
      <input type="submit" id="submit" value="Mettre a jour">

    </form>


        



    </body>
  </html>