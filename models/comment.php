<?php 
require_once "database.php"; 

// function create comment //
function createComment($content, $postid, $userid)
{
    global $database;
    $statement = $database->prepare("INSERT INTO comments(content,postid,userid) VALUES(:content,:postid,:userid)");
    $statement->execute([
        ':content' => $content,
        ':postid' => $postid,
        ':userid' => $userid,
    ]);
}

// function get all comments
function getAllComment($postid)
{
    global $database;
    $statement = $database->prepare("SELECT * FROM comments WHERE postid=:postid ORDER BY commentid DESC");
    $statement->execute([
        ':postid' => $postid,
    ]);
    return $statement->fetchAll();
}

