<?php 
require './check_login.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = $_POST['formId'];

    $likedPost = $pdo->prepare('SELECT * FROM `like_posts` WHERE id_users = :id_users AND id_posts = :id_posts');
    $likedPost->bindValue(':id_posts', $post);
    $likedPost->bindValue(':id_users', $user['id']);
    $likedPost->execute();
    $isLike = $likedPost->fetch();
    if (!$isLike) {
        $sql = $pdo->prepare("INSERT INTO `like_posts` (`id_users`, `id_posts`) VALUES (:id_user, :id_post)");
        $sql->bindParam(':id_user', $user['id']);
        $sql->bindParam(':id_post', $post);
        $sql->execute();
    }else{
        $sql = $pdo->prepare("DELETE FROM `like_posts` WHERE id_users = :id_users AND id_posts = :id_posts");
        $sql->bindParam(':id_users', $user['id']);
        $sql->bindParam(':id_posts', $post);
        $sql->execute();
    }
}

header('Location: accueil.php');
exit;