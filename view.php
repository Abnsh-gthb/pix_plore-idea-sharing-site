  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
  
    nav a,
        div ul li a {
          color: white !important;
            font-size: 1.25rem;
        }
        nav{
          width: 100vw;
          z-index: 500;
          position: sticky;
          top: 0;
          left: 0;
        }
</style>
<?php include   "partials/_dbcon.php";
include "img_dim_algo.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>view</title>
  <link rel="stylesheet" href="viewstyle.css">
</head>

<body>
  <div class="nav"><?php include "partials/_nav.php";  ?></div>
<?php  include "partials/_uploadModal.php"?>
  <div class="grid_Wrap">
    <?php
    if (isset($_GET['catid'])) {
      $catid = $_GET['catid'];
      $sql = "SELECT * FROM image_detail WHERE category=$catid";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {
        while ($image = mysqli_fetch_assoc($res)) {
          $width = $image['img_width'];
          $height = $image['img_height'];
          if ($image['ext'] == 'mp4') {
            echo '
          <div class="tall video" id="bx-shadow">
          <video id="vid"  src="Upload_Image/' . $image['uniq_id'] . '" type="video/mp4" class="Video" autoplay muted controls >
          </div>
          ';
          } else {
            echo '<div id="bx-shadow" class="' . dim_algo($width, $height) . ' image">
          <img id="img_sec" src="Upload_Image/' . $image['uniq_id'] . '">
          </div> ';
          }
        }
      }
    } else {
      $sql = "SELECT * FROM image_detail";
      $res = mysqli_query($con, $sql);

      if (mysqli_num_rows($res) > 0) {
        while ($image = mysqli_fetch_assoc($res)) {


          $width = $image['img_width'];
          $height = $image['img_height'];


          if ($image['ext'] == 'mp4') {
            echo '
          <div class="tall video" id="bx-shadow">
          <video id="vid"  src="Upload_Image/' . $image['uniq_id'] . '" type="video/mp4" class="Video" autoplay muted controls >
          </div>
          ';
          } else {
            echo '<div id="bx-shadow" class="' . dim_algo($width, $height) . ' image">
          <img id="img_sec" src="Upload_Image/' . $image['uniq_id'] . '">
          </div>          
          ';
          }
        }
      }
    }


    ?>
    <div class="popup">
      <span>&times;</span>
      <img id="img" src="Upload_Image/IMG_63dcc3499d5068.23454365.jpg">
      <div class="innerpop" style="color: black; font-family: sans-serif; display: flex; flex-direction: column;">
        <p class="" style="width: 25%;">1</p>
        <p style="width: 55%;">1</p>
        <p style="margin-bottom: 1.5rem;width: 55%;">1</p>
      </div>
    </div>


    <div class="popup-vid">
      <span>&times;</span>
      <video id="vid" src="Upload_Image/IMG_63e8bf406ac5d7.02174727.mp4" type="video/mp4" controls>
    </div>
  </div>
  </div>

  <div class="navigation">
    <ul>
      <li class="list active">
        <a href="index.php">
          <span class="icon">
            <ion-icon id="back" name="return-up-back-outline"></ion-icon>
          </span>
        </a>
      </li>
      <li class="list active">
        <a>
          <span class="icon" data-toggle="modal" data-target="#uploadModal">
            <ion-icon id="upload" name="cloud-upload-outline"></ion-icon>
          </span>
        </a>
      </li>
      <li class="list active">
        <a href="Categories.php">
          <span class="icon">
            <ion-icon id="category" name="albums-outline"></ion-icon>
          </span>
        </a>
      </li>
    </ul>
  </div>
  <!-- <div class="footnav">
    <div class="back">
      <a href="index.php"><ion-icon name="return-up-back-outline"></ion-icon></a>
    </div>
    <div class="upload">
      <a href="index.php"><ion-icon name="cloud-upload-outline"></ion-icon></a>
    </div>
    <div class="category">
      <a href="index.php"><ion-icon name="albums-outline"></ion-icon></a>
    </div>
  </div> -->
</body>
<script>
  document.querySelectorAll('.grid_Wrap img').forEach(image => {
    image.onclick = () => {
      document.querySelector('.popup').style.display = 'block';
      document.querySelector('.popup img').src = image.getAttribute('src');
      // document.querySelector('.popup .innerpop h5').innerHTML = details.innerHTML;
    }
  });

  document.querySelectorAll('.grid_Wrap #vid').forEach(Video => {
    Video.onclick = () => {
      document.querySelector('.popup-vid').style.display = 'block';
      document.querySelector('.popup-vid #vid').src = Video.getAttribute('src');
      document.querySelectorAll('.grid_Wrap #vid').pause();
      // document.querySelector('.popup .innerpop h5').innerHTML = details.innerHTML;
    }
  });

  document.querySelector('.popup span').onclick = () => {
    document.querySelector('.popup').style.display = 'none';
  }
  document.querySelector('.popup-vid span').onclick = () => {
    document.querySelector('.popup-vid').style.display = 'none';
    document.querySelector('.popup-vid #vid').pause();
  }
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</html>


<!-- $sqlcat = "SELECT * FROM image_detail";
        $res2 = mysqli_query($con, $sqlcat);
        $cat = mysqli_fetch_assoc($res2)
        &nbsp;('.$cat['cat_name'].') -->

<!-- <div class="'.dim_algo($width,$height).'" style="display: flex; flex-direction: column;">
          <img id="img_sec" src="Upload_Image/' . $image['uniq_id'] . '" >
          <div style="color: black; font-family: sans-serif; display: flex; flex-direction: column;">
          <h5 class="details" style="width: 25%; display: inline-block">'.$image['img_name'].'</h5>
          <p style="width: 55%;">'.$image['uniq_id'].'</p>
          <p style="margin-bottom: 1.5rem;width: 55%;">'.$image['time'].'</p>
    </div>  
        </div> -->