<?php
if(isset($_POST["nom"]) && isset($_POST["prenom"]))
{ echo "<h2> Bonjour ". stripslashes($_POST["nom"]). "
vous êtes ".stripslashes($_POST["prenom"]).
" nouveau en PHP</h2>";
} ?>