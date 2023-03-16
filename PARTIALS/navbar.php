<nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <a class="navbar-brand text-white" href="index.php">Blogger</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " >
    <ul class="navbar-nav ml-auto ">
    
      <?php if(isset($_SESSION['loggedUser']) && !isset($_GET['add'])) : ?>
        <li class="nav-item active ">
        <a class="nav-link text-white" href="add_blog.php?add">Add Blog </a>
      </li>
      <li class="nav-item text-white">
        <a class="nav-link text-white" href="logout.php">Logout </a>
      </li>
      <?php elseif(isset($_GET['add'])): ?>
        <li class="nav-item active">
        <a class="nav-link text-white" href="index.php">Go to Blogs </a>
      </li>
      

 <li class="nav-item ">
        <a class="nav-link text-white" href="logout.php">Logout </a>
      </li>
           <?php else: ?>
       <li class="nav-item ">
        <a class="nav-link text-white" href="index.php">Go to Blogs </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link text-white" href="login_register.php">Login/Register </a>
      </li>
     
      <?php endif; ?>
   
    </ul>
  </div>
</nav>