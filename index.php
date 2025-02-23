<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php require_once "inc/css.php";?>
</head>
<body>
<?php
require_once "inc/navbar-login-register.php";
?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-6">
      <div class="card mt-3">
        <div class="card-header text-center">
          <h1>
            <?php
            if (isset($_GET['register']) && $_GET['register'] == "true") {
              ?>
                  Register dulu lah..
              <?php
            }else{
              ?>
                  Login dulu lah...
              <?php
            }
            ?>
            </h1>
        </div>
        <div class="card-body">
          <form action="" method="post">
          <div>
            <label class="form-label" for="">Email</label>
            <input class="form-control" type="email" name="email" required placeholder="Isi Email dulu Bos...">
          </div>
          <div class="mt-2">
            <label class="form-label" for="">Password</label>
            <input class="form-control" type="password" name="password" required placeholder="Isi Passwordnya yo...">
          </div>
          <?php
          if (isset($_GET['register']) && $_GET['register'] == "true") {
          ?>
          <div class="mt-2">
            <label class="form-label" for="">Username</label>
            <input class="form-control" type="text" name="username" required placeholder="Isi Username Anda..">
          </div>
          <?php
          }
          ?>
          <div class="mt-2">
          <?php
            if (isset($_GET['register']) && $_GET['register'] == "true") {
              ?>
                  <button type="submit" class="btn btn-primary">Register</button>
              <?php
            }else{
              ?>
                  <button type="submit" class="btn btn-primary">Login</button>
              <?php
            }
            ?>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  

<?php
   require_once "inc/footer.php";
   ?>

<?php
require_once "inc/js.php";
?>
</body>
</html>