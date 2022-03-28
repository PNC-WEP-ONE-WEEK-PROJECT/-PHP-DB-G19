<?php
require_once "../models/post.php";
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $description = $_POST['description'];
    $image = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],'../images/'.$image);
    $userid = 2;
    if (!empty($description) and !empty($image)){
        createPost($description,$image,$userid);
        header('location: ../pages/profile.php');
    }
}