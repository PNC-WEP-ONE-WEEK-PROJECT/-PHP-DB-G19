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


// Fuction delete comments
function deleteComment($id){
    global $database;
    $statement = $database->prepare("DELETE FROM comments WHERE commentid = :id");
    $statement->execute([
        ':id' => $id,
    ]);
}


// Function edit comments
function editComment($id){
    global $database;
    $statement = $database->prepare('SELECT * FROM comments WHERE commentid = :id');
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}


// Update comment post

function updateComment($content,$postid,$userid,$commentid){
    global $database;
    $statement = $database->query("UPDATE comments SET content = '$content',postid= $postid,userid= $userid WHERE commentid= $commentid");
}

