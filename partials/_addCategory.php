<style>
    .cont {
        left: 10px;
        bottom: 10px;
        padding: 2rem;
        width: 300px;
        height: auto;
        position: fixed;
        border: white;
        border-radius: 12px;
        background-color: rgba(255, 255, 255, 0.600);
        z-index: 100;
    }

    form input,
    textarea {
        background: red;
    }

    .hidden {
        display: none;
    }
</style>
<?php
$success_alert = false;
$logerr = false;
$method = $_SERVER['REQUEST_METHOD'];
if ($method == 'POST' && isset($_FILES['file'])) {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        // image file
        
        $img_name = $_FILES['file']['name'];
        $img_size = $_FILES['file']['size'];
        $error = $_FILES['file']['error'];
        $tmp_name = $_FILES['file']['tmp_name'];
        
        
        //
        $cat_name = $_POST['cat_name'];
        $cat_desc = $_POST['cat_desc'];
        $cat_name = str_replace("<", "&lt;", $cat_name);
        $cat_name = str_replace(">", "&gt;", $cat_name);
        $cat_desc = str_replace("<", "&lt;", $cat_desc);
        $cat_desc = str_replace(">", "&gt;", $cat_desc);
        $posted_by = $_SESSION['useremail'];
        $sql_user = "SELECT sno FROM `users` WHERE uname='$posted_by'";
        $res2 = mysqli_query($con, $sql_user);
        $fetch = mysqli_fetch_assoc($res2);
        $post = $fetch['sno'];
        
        if ($error === 0) { 
            if ($img_size > 1100000) {
                $em = "Sorry! file is too lage";
                header("location: index.php?error=$em");
            } 
            else {
                $img_x = pathinfo($img_name, PATHINFO_EXTENSION);
                // echo($img_x);
                $img_x_lc = strtolower($img_x);
                $allowed_xt = array("jpg", "jpeg", "png");
                if (in_array($img_x, $allowed_xt)) {
                    $new_img_id = uniqid("IMG_", true) . '.' . $img_x_lc;
                    $upload_path = '../Project1/Cat_img/' . $new_img_id;
                    move_uploaded_file($tmp_name, $upload_path);
                    
                    $sql = "INSERT INTO `category` ( `cat_name`, `cat_desc`, `username`,`img_uniq_id`, `time`) VALUES ('$cat_name', '$cat_desc','$post','$new_img_id', current_timestamp())";
                    $res = mysqli_query($con, $sql);
                    
                    $success_alert = true;
                }
                
            }
        }
    
    } 
    else {
        $logerr = true;
    }
}

?>

<form class="cont hidden" id="cont" action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
    <div class="head" style="display: flex; flex-direction: row; justify-content: space-between; margin-bottom: 2rem;">
        <h5>Creat Category</h5>
        <button id="closeCat" style="color: red; background: transparent; border: none; height: auto; cursor: pointer; outline: none;" onclick="closeCreatCat()">Close</button>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Category Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="cat_name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Category Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="cat_desc"></textarea>
    </div>
    <div class="input-group mb-5">
        <label class="input-group-text" for="inputGroupFile01">Image</label>
        <input type="file" class="form-control" id="inputGroupFile01" name="file">
    </div>
    <?php
    if (isset($_SESSION['loggedin']) == true) {
        echo '
        <button class="btn btn-primary" type="submit" name="post">Post</button>
        ';
    } else {
        echo '
        <p style="color: red; background: transparent; border: none; height: auto;">Login to creat Category</p>
        ';
    }
    ?>
</form>


<script>
    function categoryCreat() {
        let Creat = document.getElementById("cont");
        Creat.classList.remove("hidden");
    }

    function closeCreatCat() {
        let Creat = document.getElementById("cont");
        Creat.classList.add("hidden");
    }
</script>