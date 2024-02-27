<?php
    require_once 'check_login.php';
?>

<?php require_once '../templates/head.php' ?>
<?php require_once '../templates/navbar.php' ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Bienvenue <?= $user['first_name'] . ' ' . $user['last_name'] ?></h1>
            <a href="add_post.php" class="btn btn-primary">Ajouter un post</a>
        </div>
        <div class="col-12">
            <h2>Publications</h2>
            <?php
            $query = "SELECT * FROM posts ORDER BY created_at DESC";
            $statement = $pdo->query($query);
            $statement->execute();
            $posts = $statement->fetchAll();
            foreach ($posts as $post) {
                $date = new DateTime($post['created_at']);
                $date = $date->format('d/m/Y à H:i');
                $userPost = $post['id_users'];
                $query = "SELECT * FROM users WHERE id = :id";
                $statement = $pdo->prepare($query);
                $statement->bindValue(':id', $userPost);
                $statement->execute();
                $userPost = $statement->fetch();
                ?>
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-title"><?= $userPost['first_name'] . ' ' . $userPost['last_name'] ?></h5>
                        <?= $post['content'] ?>
                        <br>
                        <small>Publié le <?= $date ?></small>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php require_once '../templates/footer.php' ?>


