<?php

require_once "../models/comment.php";
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $content = $_POST['content'];
    $postid = $_POST['postid'];
    $userid = 5;
    if (!empty($content)){
        createComment($content, $postid, $userid);
        header('location: ../pages/home.php');
    }
}


