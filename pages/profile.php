<?php 
    require_once "../templates/header.php"; 
    require_once "../controllers/create_post.php";
?>

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
            <a href="profile.php" class="active">Profile</a>
        </div>
        <div class="manu">
            <a href="yourfriend.php">Your Friend</a>
        </div>
        <div class="manu">
            <a href="">Logout</a>
        </div>
    </div>
    <div class="main">
        <?php
            require_once "../models/post.php";
            $posts = getItem() ;
            foreach ($posts as $post):
        ?>
        
        <div class="card">
            <div class="card-body">
                <h5 class="firstname"><?= $post['description'];?></h5>
                <img src="../images/<?=$post['image'];?>" alt="">
            </div> 
            <div class="function">
                <a href="../controllers/delete_post.php?id=<?= $post['postid']?>">delete</a>
                <a href="edit_form.php?id=<?= $post['postid']?>">edit</a>
            </div>
        </div>
        
        <?php endforeach?>
    </div>
</div>
</div>
<?php require_once "../templates/footer.php";?>