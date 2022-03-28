<!-- header file -->
<?php require_once "../templates/header.php"; ?>
<!-- Nav bare -->
<nav>
    <div class="logo">Facebook <span>2.0</span></div>
    <div class="friend-post">
        <li><a href="addfriend.php"><i class='fas fa-user-friends' style='font-size:24px'></i></a></li>
        <li><a href="post_form.php">Post</a></li>
    </div>
</nav>
<div class="container">
    <div class="sidebare">
        <div class="search">
            <input type="text" name="search" id="search" placeholder="Find your new friend.....">
        </div>
        <div class="manu">
            <a href="home.php">Home</a>
        </div>
        <div class="manu">
            <a href="profile.php">Profile</a>
        </div>
        <div class="manu">
            <a href="yourfriend.php">Your Friend</a>
        </div>
        <div class="manu">
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="main">
        <h1>Create Post</h1>
        <form action="../controllers/create_post.php" method = "post" enctype="multipart/form-data">
            <div class="head-card">
                <div class="profile-pic">
                    <img src="../images/pip-panda.jpg" alt="">
                    <h3>
                        <?php 
                        // name User 
                        require_once "../controllers/forgot_input_field.php";
                        $statmentName = $database->query("SELECT * FROM users WHERE email = 'soklim.hin@student.passerellesnumeriques.org'");
                        $allNameUser = $statmentName->fetchAll();
                        foreach($allNameUser as $trueUser){
                            echo $trueUser['firstname'];
                        }
                        ?>
                    </h3>
                </div>
            </div>
            <hr>
            <div class="description">
                <textarea name="description" id="description" placeholder="Say something...."></textarea>
            </div>
            <div class="choosefile">
                <input type="file" name="file" class="file" id="file" >
            </div>
            <div class="post">
                <input type="submit" value="Post">
            </div>
        </form>
    </div>
    
</div>

<?php require_once "../templates/footer.php";?>