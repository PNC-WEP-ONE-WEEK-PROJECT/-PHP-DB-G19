<?php

session_start();
if($_SERVER['REQUEST_METHOD'] =='POST'){
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    $_SESSION['firstname'] = false;
    $_SESSION['lastname'] = false;
    $_SESSION['password'] = false;
    $_SESSION['confirm'] = false;
    $_SESSION['email'] = false;
    $_SESSION['country'] = false;

    // Check User input all fields
    if ((isset($_POST['firstname']) and $_POST['firstname']) and(isset($_POST['lastname']) and $_POST['lastname']) and (isset($_POST['password']) and $_POST['password']) and (isset($_POST['confirm']) and $_POST['confirm']) and (isset($_POST['email']) and $_POST['email']) and (isset($_POST['country']) and $_POST['country']) !=''){

        // Check confirm password the password
        if($password == $confirm) {
            require_once "../models/post.php";
            createAccount($_POST['firstname'],$_POST['lastname'],$_POST['gender'],$_POST['email'],$_POST['password'],$_POST['country']);
            header('location: ../index.php');
        }
        else{
            $_SESSION['confirm'] = true;
            header('location: ../pages/register_acc.php');
        }

    }
    if(isset($_POST['firstname']) and $_POST['firstname'] ==''){
        $_SESSION['firstname'] = true;
        header('location: ../pages/register_acc.php');
    }
    elseif(isset($_POST['lastname']) and $_POST['lastname'] ==''){
        $_SESSION['lastname'] = true;
        header('location: ../pages/register_acc.php');
    }
    elseif(isset($_POST['email']) and $_POST['email'] ==''){
        $_SESSION['email'] = true;
        header('location: ../pages/register_acc.php');
    }
    elseif(isset($_POST['password']) and $_POST['password'] ==''){
        $_SESSION['password'] = true;
        header('location: ../pages/register_acc.php');
    }
    elseif(isset($_POST['confirm']) and $_POST['confirm'] ==''){
        $_SESSION['confirm'] = true;
        header('location: ../pages/register_acc.php');
    }
    elseif(isset($_POST['country']) and $_POST['country'] ==''){
        $_SESSION['country'] = true;
        header('location: ../pages/register_acc.php');
    }
    
}
?>

