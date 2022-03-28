<?php 
    // header file
    require_once "../templates/header.php"; 

    // create post file
    require_once "../controllers/create_post.php";
    require_once "../controllers/create_comment.php";
?>

<!-- Nav bare -->
<nav>
    <!-- logo app  -->
    <div class="logo">Facebook <span>2.0</span></div>

    <!-- page post and add friend page -->
    <div class="friend-post">
        <li><a href="addfriend.php"><i class='fas fa-user-friends' style='font-size:24px'></i></a></li>
        <li><a href="post_form.php">Post</a></li>
    </div>
</nav>
<!-- Container -->
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
        <div class="profile-user">
            <img src="../images/pip-panda.jpg" alt="">
        </div>
        <h1>Soklim</h1>
        <hr>
        <?php
            // post file
            require_once "../models/post.php";
            // loop all item
            $posts = getItem();
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
            <div class="footer-card">
                <div class="like">
                    <a  onclick="createLike()" title="Like" id="like"><i class='far fa-thumbs-up' style='font-size:15px'>Like</i></a>
                    <a title="See All comments"><i class='far fa-comment-dots' style='font-size:15px'>Comment</i></a>
                </div>
                <div class="function">
                    <a href="../controllers/delete_post.php?id=<?= $post['postid']?>"><i class='fas fa-trash' style='font-size:15px'>Delete</i></a>
                    <a href="edit_form.php?id=<?= $post['postid']?>"><i class='fas fa-pen' style='font-size:15px'>Edit</i></a>
                </div>
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
                            <a href="../controllers/delete_comment.php?id=<?= $comment['commentid']?>"><i class='fas fa-trash' style='font-size:15px'></i></a>
                            <a href="edit_comment_profile.php?id=<?= $comment['commentid']?>"><i class='fas fa-pen' style='font-size:15px'></i></a>
                        </div>
                    </div>
                </div>
                    
            <?php
            }
            ?>
        </div>
        <div class="form-comment">
            <form action="../controllers/create_comment.php" method="post">
                <input type="hidden" name="postid" value="<?=$post['postid']?>">
                <div class="like-cmt">
                    <input type="text" name="content" id="comment" placeholder="Comment...">
                    <input type="submit" value="Comment">
                </div>
            </form>
        </div>
        <?php //endforeach?>
        <?php endforeach?>
        <p>You can add more posts <a href="post_form.php">Create More Post</a></p>
    </div>
</div>
</div>
<?php require_once "../templates/footer.php";?>