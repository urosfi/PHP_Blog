<?php require "bootstrap.php"; ?>
<?php $id=$_SESSION['loggedUser']->id ?>
<?php $userPosts = $post->SelectUserPost($id); ?>

<?php require "view/user_blogs.view.php"; ?>