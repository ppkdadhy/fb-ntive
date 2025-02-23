<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facebook Profile Page</title>
  <?php require_once "inc/css.php";?>

</head>
<body>
  <!-- Navbar -->
  <?php require_once "inc/navbar-content.php";?>

  <!-- Cover and Profile Photo -->
  <div class="container mt-4">
    <div class="bg-light p-5 rounded text-center" style="background-image: url('uploads/background_photos/<?php echo $user['background_photo']; ?>'); background-size: cover; background-position: center;">
      <div class="rounded-circle mx-auto border border-light" style="width: 150px; height: 150px; overflow: hidden;">
        <img src="uploads/profile_photos/<?php echo $user['profile_photo']; ?>" alt="Profile Photo" class="w-100 h-100">
      </div>
      <h1 class="mt-3"><?php echo $user['name']; ?></h1>
      <div class="mt-2">
        <a href="profilefb-edit.php" class="btn btn-primary">Edit</a>
        <button class="btn btn-outline-primary">Like</button>
        <button class="btn btn-outline-primary">Follow</button>
        <button class="btn btn-outline-primary">Message</button>
      </div>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container mt-5">
    <div class="row">
      <!-- Left Sidebar -->
      <div class="col-md-4">
        <div class="bg-light p-3 mb-4">
          <h3>About</h3>
          <p>Your Address<br>City, Country</p>
        </div>
        <div class="bg-light p-3 mb-4">
          <h3>Apps</h3>
          <ul class="list-unstyled">
            <li>Welcome</li>
            <li>FWB</li>
            <li>Livestream</li>
          </ul>
        </div>
        <div class="bg-light p-3">
          <h3>Photos</h3>
          <div class="d-flex flex-wrap">
            <div class="p-1"><div class="photo bg-secondary rounded" style="width: 70px; height: 70px;"></div></div>
            <div class="p-1"><div class="photo bg-secondary rounded" style="width: 70px; height: 70px;"></div></div>
            <div class="p-1"><div class="photo bg-secondary rounded" style="width: 70px; height: 70px;"></div></div>
            <div class="p-1"><div class="photo bg-secondary rounded" style="width: 70px; height: 70px;"></div></div>
          </div>
        </div>
      </div>

      <!-- Timeline -->
      <div class="col-md-8">
        <div class="bg-light p-3 mb-3">
          <p>Your Page Name changed their cover photo.</p>
          <div class="post-image bg-secondary mb-2" style="height: 150px;"></div>
          <div class="d-flex justify-content-around">
            <span>Like</span>
            <span>Comment</span>
            <span>Share</span>
          </div>
        </div>
        <div class="bg-light p-3 mb-3">
          <p>Your Page Name created an event.</p>
          <div class="post-image bg-secondary mb-2" style="height: 150px;"></div>
          <div class="d-flex justify-content-around">
            <span>Like</span>
            <span>Comment</span>
            <span>Share</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
   <?php
   require_once "inc/footer.php";
   ?>
  <?php
require_once "inc/js.php";
?>
</body>
</html>
