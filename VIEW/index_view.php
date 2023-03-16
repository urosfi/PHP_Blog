

<?php require "PARTIALS/header.php"; ?>

<?php require "PARTIALS/navbar.php"; ?>
 <div class="container mt-5">
    <div class="row col-8offset-1" >
         <div class="col-8 offset-2 text-center text-white  ">
            <h1>All Posts</h1><br><br>
         <?php foreach($posts as $post): ?>
               <div class="card mb-5 text-center bg-dark text-white">
               
                 <div class="card-header bg-success border-light " style="font-size:larger">
                         <?php echo $post->title ?>
                         <?php if(isset($_SESSION['loggedUser']) && ($_SESSION['loggedUser']->id == $post->user_id)):?>
                         <button class="btn btn-danger btn-sm float-right " > <a href="index.php?id=<?php echo $post->id ?>" class="text-white">Remove</a></button> 
                         <?php endif; ?>
                        </div>
                   
                        <div class="card-body " style="height:120px">
                        <div class="col-2 float-left mr-3"><img src="<?php  echo $post->image ?>" height="90" width="100"><br></div>
                        <div ><?php echo $post->description?></div>
                         </div>
                          <div class="card-footer border-warning ">
                          <button class="btn btn-primary float-right btn-sm "><?php echo $post->created_at ?></button>
                          <button class="btn btn-warning float-left border-primary  "><a href="user_blogs.php?userspost"><?php echo $user->getUserWhoCreated($post->user_id)->name;?></a></button>
                           </div>
                           </div>
       <?php endforeach; ?>

                 

              




         </div>
    </div>
 </div>
     
    
<?php require "PARTIALS/footer.php"; ?>