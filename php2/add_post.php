<?php
require_once './check_login.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $content = $_POST['content'];
        $query = "INSERT INTO posts (content, id_users, created_at) VALUES (:content, :id_users, :created_at)";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':created_at', date('Y-m-d H:i:s'));
        $statement->bindValue(':content', $content);
        $statement->bindValue(':id_users', $user['id']);
        $statement->execute();
        header('Location: index.php');
    } catch (PDOException $e) {
        var_dump($e->getMessage());
        die;
    }
}
?>
<?php require_once './templates/head.php' ?>
<?php require_once './templates/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Ajouter un post</h1>
<!--            <form action="add_post.php" method="post">-->
<!--                <input type="text" name="title" placeholder="Titre">-->
<!--                <textarea name="content" placeholder="Contenu"></textarea>-->
<!--                <input type="submit" value="Ajouter">-->
<!--            </form>-->
            <form action="add_post.php" method="post">
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
        </div>
    </div>
</div>
<?php require_once './templates/footer.php' ?>
