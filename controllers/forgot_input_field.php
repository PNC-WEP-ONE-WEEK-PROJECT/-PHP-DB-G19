<?php
// Link to database
require_once "../models/database.php";
// Start session for not input 
session_start();
$nameUser = "";
$emailUser = "";
// Variable Check True or False Account 
$emailTrue = false;
$passwordTrue = false;

// Check if Submit result that input
if($_SERVER['REQUEST_METHOD'] =='POST'){

    // Variable Check session
    $_SESSION['password'] = false;
    $_SESSION['email'] = false;

    // Variable store value after submit
    $emailUser = $_POST['email'];
    $password = $_POST['password'];

    //Check Value submit not null
    if (isset($_POST['email']) and $_POST['email'] !=''){

        // Variable Query select email
        $statmentEmail = $database->query("SELECT email FROM users");
        $allEmail = $statmentEmail->fetchAll();

        // Loop all email in database
        foreach($allEmail as $emailLog){
            // Check if True email
            if($emailLog['email'] == $emailUser){
                $emailTrue = true;
            }
            else{
                header('location: ../index.php');
            }  
        }  
    }
    else{
        $_SESSION['email'] = true;
        header('location: ../index.php');
    }
    if (isset($_POST['password']) and $_POST['password'] !=''){
        $statmentpassword = $database->query("SELECT password FROM users");
        $allpassword = $statmentpassword->fetchAll();
        
        foreach($allpassword as $passwordlog){
            if($passwordlog['password'] == $password){
                $passwordTrue = true;
            }
            else{
                header('location: ../index.php');
            }  
        }  
    }
    else{
        $_SESSION['password'] = true;
        header('location: ../index.php');
    }
}



?>

