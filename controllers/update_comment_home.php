<?php

require_once "../models/comment.php";


if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $content = $_POST['content'];
    $postid = $_POST['postid'];
    $commentid = $_POST['commentid'];
    $userid = 2; 
    if (!empty($content)){
        updateComment($content,$postid,$userid,$commentid);
        header('location: ../pages/home.php');
    }
}