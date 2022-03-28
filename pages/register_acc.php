<!-- link header file -->
<?php require_once "../templates/header.php"?>

<div class="title">
    <h1>Create New Account</h1>
</div>
<!-- Form create account -->
<form action="../controllers/create_new_acc.php" method="post">
    <p>Create Account</p>
    <div class="fullname">
        <div class="input">
            <input type="text" name="firstname" id="firstname" placeholder= "First Name..">
            <?php
            // Check not input first name
            session_start();
            if (isset($_SESSION['firstname'])){
                // Check Session true 
                if($_SESSION['firstname']){
                    // Display message
                    echo "<span>Please enter your first name!!<span>";
                }
            }
            ?>
        </div>
        <div class="input">
            <input type="text" name="lastname" id="lastname" placeholder= "Last Name..">
            <?php
            // Check not input last name
            if (isset($_SESSION['lastname'])){
                if($_SESSION['lastname']){
                    echo "<span>Please enter your last name!!</span>";
                }
            }
            ?>
        </div>
    </div>
    <div class="email-reg">
        <input type="email" name="email" id="email" placeholder="Your Email.."> 
        <?php
            // Check not input email
            if (isset($_SESSION['email'])){
                if($_SESSION['email']){
                    echo "<span>Please enter your email!!</span>";
                }
            }
            ?>
    </div>
    <div class="password-reg">
        <div class="password">
            <input type="password" name="password" id="password" placeholder="Password">
            <?php
            // Check not input password
            if (isset($_SESSION['password'])){
                if($_SESSION['password']){
                    echo "<span>Please enter your password</span>";
                }
            }
            ?>
        </div>
        <div class="password">
            <input type="password" name="confirm" id="confirm" placeholder="Confirm Password">
            <?php
            // Check no input confirm password
            if (isset($_SESSION['confirm'])){
                if($_SESSION['confirm']){
                    echo "<span>Please confirm your password!!</span>";
                }
            }
            ?>
        </div>
    </div>
    <div class="country">
        <select name="country" id="country">
            <option value="">Choose country</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Thailand">Thailand</option>
            <option value="Lao">Lao</option>
        </select>
        <?php
        // Check not select country
        if (isset($_SESSION['country'])){
                if($_SESSION['country']){
                    echo "<span>Please select your country!!</span>";
                }
            }
            ?>
    </div>
    <div class="gender">
        <input type="radio" name="gender" id="male" value ="Male"> Male
        <input type="radio" name="gender" id="femal" value ="Femal"> Female
    </div>
    <div class="login">
        <input type="submit" value="Create">
    </div>

</form>
