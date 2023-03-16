
<?php require "PARTIALS/header.php"; ?>

<?php require "PARTIALS/navbar.php"; ?>
 <div class="container">
    <div class="row  ">
   
          <div class="col-8 offset-1  text-center mt-5 text-white">
         <h2 >Add Post</h2>
         <form action="add_blog.php?add" method="POST" enctype="multipart/form-data" >
                 <input type="text" placeholder="Title" name="title" class="form-control mt-5 bg-dark text-white">
                 <textarea cols="10" rows="10" placeholder="New Post" name="new_post" class="form-control mt-5 bg-dark text-white" ></textarea><br>
                 <input type="file" name="image">
                 <input type="hidden" value="image_uploaded">
                 <button type="submit" name='Btn_new_post' class="btn btn-primary form-control mt-2 mb-3 border-warning">POST </button>
        </form>
        <?php if($post->post_inserted): ?>
        

        <div class="alert alert-danger mt-3">Uspesno ste dodali novi post</div>
        <?php endif; ?>
         </div>
    </div>
 </div>
    
<?php require "PARTIALS/footer.php"; ?>

