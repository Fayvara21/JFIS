<?php 
require_once './check_login.php';

$sql = $conn->prepare("INSERT INTO `like_posts` (`id_users`, `id_posts`) VALUES (:id, :id_post)");