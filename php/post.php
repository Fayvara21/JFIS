<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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





    </body>
</html>