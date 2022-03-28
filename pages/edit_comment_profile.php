<?php require_once "../templates/header.php"; 
require_once "../controllers/create_comment.php";
?>
<nav>
    <div class="logo" title="Facebook 2.0">Facebook <span>2.0</span></div>
    <div class="friend-post">
        <li><a href="addfriend.php" title ="Add your new friends"><i class='fas fa-user-friends' style='font-size:24px'></i></a></li>
        <li><a href="post_form.php" title="Create new Post">Post</a></li>
    </div>
</nav>
<div class="container">
    <div class="sidebare">
        <!-- Search bar -->
        <div class="search">
            <input type="text" name="search" id="search" placeholder="Find your new friend.....">
        </div>
        <!-- Manu of app -->
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
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="main">
        <h3>Edit Comment Post</h3>

        <?php
            // post file
            require_once "../models/post.php";
            require_once "../controllers/edit_comment_home.php";
            
        ?>
        
        <div class="form-comment">
            <?php 
                $comment = editComment($id);
            ?>
                <!-- comment on post -->
            <form action="../controllers/update_comment_profile.php" method="post">
                <input type="hidden" name="postid" value="<?=$comment['postid']?>">
                <input type="hidden" name="commentid" value="<?=$comment['commentid']?>">

                <div class="like-cmt">
                    <input type="text" name="content" id="comment" placeholder="Comment..." value="<?= $comment['content']  ?>">
                    <input type="submit" value="Comment">
                </div>
            </form>
        </div>
        <!-- end of loop -->
    </div>
</div>
<!-- Footer include -->
<?php require_once "../templates/footer.php";?>