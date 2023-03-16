<?php require "PARTIALS/header.php"; ?>
<?php require "PARTIALS/navbar.php"; ?>
<div class="container">
  <div class="row mt-5">
      <div class="col-5  ">
      <br><br><h2>Login</h2><br><br>
         <form action="login_register.php" method="POST">
                <input type="email" name="log_email" placeholder="email" class="form-control"><br>
                <input type="password" name="log_pass" placeholder="password" class="form-control"><br>
                <button type="submit" name="Login_Btn"  class="form-control btn btn-success">Login</button>
        </form>
        <?php if($user->login_succesfull): ?>
                    <br> <br><div class="alert alert-danger">Uspesno ste se ulogovali,idite na <a href="index.php">Blog</a>
                      
                    </div>
                    <?php endif;  ?>
      </div>
      <div class="col-5 offset-1 ">
      <br><br><h2>Register</h2><br><br>
           <form action="login_register.php" method="POST">
                <input type="text" name="reg_name" placeholder="name"  class="form-control"><br>
                <input type="email" name="reg_email" placeholder="email"  class="form-control"><br>
                <input type="password" name="reg_pass" placeholder="password"  class="form-control"><br>
                
                <button type="submit" name="Register_Btn"  class="form-control btn btn-primary">Register</button>
                <?php if($user->insert_succesfull): ?>
                    <br> <br><div class="alert alert-danger">Uspesno ste se registrovali,molim da se ulogujete!!!</div>
                    <?php endif;  ?>
           </form>


      </div>
 
  </div>
</div>


















<?php require "PARTIALS/footer.php"; ?>











?>