<!-- Link to templates header file -->
<?php require_once "templates/header.php";?>

<!-- From Login Account -->
<div class="title">
    <h1>Welcome to Facebook 2.0</h1>
</div>
<form action="controllers/current_acc.php" method="post">
    <p>Login to Facebook</p>
    <div class="email">
        <input type="email" name="email" id="email" placeholder="Email address...">
        <?php
            // Checked User input null values for email
            session_start();
            if (isset($_SESSION['email'])){
                if ($_SESSION['email']){
                    echo "<span>"."Plese enter your Email!!". "</span>";
                }
            }
        ?>
    </div>
    <div class="password-index">
        <input type="password" name="password" id="password" placeholder="Password...">
        <?php
            // Checked User input null values for password
            if (isset($_SESSION['password'])){
                if ($_SESSION['password']){
                    echo "<span>"."Plese enter your password!!". "</span>";
                }
            }
        ?>
    </div>
    <div class="login">
        <input type="submit" value="Login">
    </div>

    <div class="help">
        <a href="pages/register_acc.php">Create new Account</a>
        <a href="">Forgot Password?</a>
    </div>
</form>

<p>@ Created by <a href="#">Soklim</a> and <a href="#">Chhaiya</a> Web Student PNC 2022</p>

<!-- Link to templates footer file  -->
<?php require_once "templates/footer.php";?>

