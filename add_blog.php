<?php
require "bootstrap.php";
if(isset($_POST['Btn_new_post']) && isset($_SESSION['loggedUser'])){
    $post->insertPost();
    
    move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
}




require "view/add_blog.view.php";
?>