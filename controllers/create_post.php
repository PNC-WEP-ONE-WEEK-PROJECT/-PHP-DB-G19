<?php

require_once "../models/post.php";


if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $description = $_POST['description'];
    $image = $_POST['file'];
    echo $description;
    $userid = 2;
    if (!empty($description) and !empty($image)){
        createPost($description,$image,$userid);
        header('location: ../pages/home.php');
    }
}