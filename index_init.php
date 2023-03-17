<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Pixlxplore</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    .container_main {
      background: url(img_clg_proj/orange_sky.jpg) 0;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .inner_container1 {
      background-repeat: no-repeat;
      display: flex;
      justify-content: space-between;
      flex-direction: row;
      align-items: center;
      min-height: 10vh;
    }

    .upload_btn {
      display: inline-block;
      border-radius: 50%;

    }
  </style>
  <script>
    const el = document.getElementById("img");
    el.addEventListener(("change"), (e) => {
      let reader = new FileReader();
      reader.readAsDataURL(e.target.files[0]);
      reader.onload = function(e) {
        const image = new Image();
        image.src = e.target.result;
        image.onload = function() {
          const height = this.height;
          const width = this.width;

          alert(height);
          alert(width);

        }
      }
    })
  </script>
</head>

<body>
  <?php include "partials/_nav.php" ?>
  <?php include "partials/_uploadModal.php" ?>

  <div class="container_main" style="min-height: 350px;">
    <div class="inner_container1">
      <div class="intro" style="align-items: center; justify-content: center; margin-left: 45px;">
        <h1 class="text-white ml-4">Pixplore</h1>
        <p class="text-white" style="width:40%;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem sit, sunt asperiores quaerat, harum delectus vel.</p>
      </div>



      <span id="errormsg">
        <?php
        if (isset($_GET['error'])) {
          echo $_GET['error'];
        }
        ?>
      </span>
    </div>
    <div class="inner_container2">
      <div>
        <div class="upload_btn" style="margin-top: 4rem;">
        <button type="button" class="rounded-circle" data-toggle="modal" data-target="#uploadModal"><img src="img_clg_proj/2810455.png" alt="" style="height: 2.5rem;"></button>
        <!-- <a href="view.php">&#8594;</a> -->
        </div>
      </div>
    </div>
  </div>

  <?php include "partials/_footer.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>