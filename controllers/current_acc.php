<?php
require_once "forgot_input_field.php";

if($emailTrue and $passwordTrue){
    // $statmentName = $database->query("SELECT firstname FROM users WHERE email = '$email'");
    // $allNameUser = $statmentName->fetchAll();

    // foreach($allNameUser as $trueUser){
    //     $nameUser = $trueUser['firstname'];
    // }
    header('location: ../pages/home.php');
}


?>