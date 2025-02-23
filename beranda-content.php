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
require_once "inc/navbar-content.php";
?>
<div class="container-fluid mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-3">
    <h4>Kabar Berita</h4>
            <ul>
                <li>Messenger</li>
                <li>Pintasan</li>
                <li>Jelajahi</li>
            </ul>
    </div>
    <div class="col-6 border">
      <form action="">
        <div class="mt-1 p-2">
        <label class="form-label" for="status">Tulis Status Anda:</label>
        <textarea class="form-control" name="status" id="status" rows="3">
        </textarea>
        </div>
        <div class="mt-1 p-2 w-50">
          <input type="file" name="foto" class="form-control" accept=".png,.jpg,.jpeg">
        </div>
        <div class="mt-1 p-2">
          <button class="btn btn-success" name="kirim">Kirim Gibah Anda disini!</button>
        </div>
      </form>
    </div>
    <div class="col-3">
    <h4>Stories</h4>
            <ul>
                <li>Story 1</li>
                <li>Story 2</li>
                <li>Story 3</li>
            </ul>
    </div>
  </div>
  <div class="row d-flex justify-content-center">
    <div class="col-3">

    </div>
    <div class="col-6 border">
 
          <div class="mt-2">
                  <img src="assets/img/profile-2398782_1280.webp" width="30" alt="profile" class="rounded-circle">
                  <!-- {{ ucwords($status->user->name) ?? 'Unknown User' }} -->
                  <span>Unknown User</span>
                  <!-- {{ $status->created_at->diffForHumans() }} - {{ $status->location ?? 'Unknown Location' }} -->
                  <span>4 Hours Ago - Jakarta, Indonesia</span>
              <div class="mt-1">
                  <p class="ms-4">INI STATUS SAYA</p>
                  <hr style="width: 90%;">
                  
                  <!-- @if($status->post_image)
                      <img src="{{ asset('storage/' . $status->post_image) }}" alt="post image">
                  @endif -->
              </div>
          </div>
   
    </div>
    <div class="col-3">
      
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