<?php 
require_once "../models/post.php";

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $description = $_POST['description'];
    $image = $_FILES['file']['name'];
    $id = $_POST['id'];
    $userid = 2;

    if (!empty($description) and !empty($image)){
        updatePost($description,$image,$id,$userid);
        header('location: ../pages/profile.php');
    }
}





