<?php 
require "bootstrap.php"; ?>
<?php
$posts=$post->SelectPost();
if(isset($_GET['id']) && isset($_SESSION['loggedUser']))


{
    $post->deletePost($_GET['id']);
    header("location:index.php");
}
?>



<?php require "VIEW/index_view.php" ?>