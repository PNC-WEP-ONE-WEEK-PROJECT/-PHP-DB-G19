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
            <a href="home.php" class="active">Home</a>
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
        <h3>See All Post</h3>

        <?php
            // post file
            require_once "../models/post.php";
            // loop all item
            $posts = getItem() ;
            foreach ($posts as $post):
        ?>
        
        <div class="card">
            <div class="image-user">
                <div class="user">
                    <img src="../images/pip-panda.jpg" alt="">
                </div>
                <h3>soklim</h3>
            </div>
            <hr>
            <div class="card-body">
                <p><?= $post['description'];?></p>
                <div class="image-post">
                    <img src="../images/<?=$post['image'];?>" alt="">
                </div>
            </div> 
            <hr>
            <div class="like">
                <a onclick="createLike()" id="like" title = "Like"><i class='far fa-thumbs-up' style='font-size:15px'>Like</i></a>
                <a title="See all comments"><i class='far fa-comment-dots' style='font-size:15px'>Comment</i></a>
            </div>
            
            
        </div>
        <div class="form-comment">
            <?php
           
            $comments = getAllComment($post['postid']);
            foreach ($comments as $comment)
            {
            ?>
                <div class="comment-content">
                    <div class="profile-comment">
                        <div class="profile-user-comment">
                            <img src="../images/pip-panda.jpg" alt="">
                        </div>
                        <div class="name-user-comment">
                            <h4>Soklim</h4>
                        </div>
                        
                    </div>
                    <div class="delete-edit-commenter">
                        <p><?=$comment['content'];?></p>
                        <div class="delete-edit-commenter">
                            <a href="../controllers/delete_comment_home.php?id=<?= $comment['commentid']?>"><i class='fas fa-trash' style='font-size:15px'></i></a>
                            <a href="edit_comment_home.php?id=<?= $comment['commentid']?>"><i class='fas fa-pen' style='font-size:15px'></i></a>
                        </div>
                    </div>
                </div>
                    
            <?php
            }
            ?>
        </div>
        <div class="form-comment">
                <!-- comment on post -->
            <form action="../controllers/create_comment_home.php" method="post">
                <input type="hidden" name="postid" value="<?=$post['postid']?>">
                <div class="like-cmt">
                    <input type="text" name="content" id="comment" placeholder="Comment...">
                    <input type="submit" value="Comment">
                </div>
            </form>
        </div>
        <!-- end of loop -->
        <?php endforeach?>
        <p>Find new fiends to see more post.<a href="addfriend.php">Add new friends</a></p>
    </div>
</div>
<!-- Footer include -->
<?php require_once "../templates/footer.php";?>