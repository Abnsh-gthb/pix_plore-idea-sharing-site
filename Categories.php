<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: rgba(232, 227, 227, 0.217) url(img_clg_proj/background.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-blend-mode: lighten;
    }


    .container {
        min-height: 80vh;
        max-height: 80vw;
        border: 1px solid white;
        border-radius: 12px;
        padding: 10px 10px;
        overflow: hidden;
        overflow-y: visible;
    }
    
    .scroll {
        width: 78vw;
        height: 78vh;
        margin: 2px;
        border-radius: 12px;
    }

    .scroll-obj {
        padding: 2rem;
    }
</style>
<?php
include "partials/_dbcon.php";
include "partials/_navAll.php";

?>
<div class="container mt-3 mb-3 scroll-bg">
    <div class="scroll">
        <div class="scroll-obj">
            <h4 style="color: wheat; margin-left:1rem; margin-bottom: 2rem;">Categories</h4>
            <?php
            $sql_user = "SELECT * FROM `category`";
            $res2 = mysqli_query($con, $sql_user);
            if (mysqli_num_rows($res2) > 0) {
                while ($fetch = mysqli_fetch_assoc($res2)) {
                    $cat_id = $fetch['cat_id'];
                    $desc = $fetch['cat_desc'];
                    $img = $fetch['img_uniq_id'];

                    echo ' <a href="view.php?catid='.$cat_id.'" class=" d-flex" style="text-decoration: none; color: antiquewhite; "><div class="media my-3 d-flex category-card" style="width:90%;">
      <img class="mr-3" src="Cat_img/' . $img . '" style="width:100px; height:100px; border-radius: 12px;" alt="Generic placeholder image">
      <div class="mx-3">
      <h5 class="mt-0">' . $fetch['cat_name'] . '</h5>
      <p>' . $desc . '</p>
    </div>
    </div>
    </a>
    <hr  color="salmon" style="width: 90%;">';
                }
            }
            ?>
        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>


    <?php include "partials/_addCategory.php" ?>



<?php include "partials/_footer.php";?>