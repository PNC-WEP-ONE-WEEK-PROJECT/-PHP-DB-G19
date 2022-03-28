<?php require_once "../templates/header.php"; ?>
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
        <h1>Add friends</h1>
        <?php require_once "../models/post.php";

        $users = displayAccountUser();
        foreach ($users as $user):
        ?>
        <div class="card-friend">
            <div class="image-friend">
                <img src="../images/pip-panda.jpg" alt="">
                <h4><?=$user['firstname']?></h4>
            </div>
            <div class="add">
                <a href="">Add friend</a>
            </div>
        </div>

        <?php endforeach; ?>
    </div>
</div>


<?php require_once "../templates/footer.php";?>