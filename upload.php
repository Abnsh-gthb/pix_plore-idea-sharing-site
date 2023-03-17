<?php
if (isset($_POST['submit']) && isset($_FILES['img'])) {
    include "partials/_dbcon.php";
    // print_r($_FILES['img']);
    // // print_r(getimagesize($_FILES['img']['name']));
    $file_name = $_POST['name'];
    $file_cat = $_POST['category'];
    $img_name = $_FILES['img']['name'];
    $img_size = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];

    // $file=$_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    $image_info = getimagesize(realpath($tmp_name));
    $width=$image_info[0];
    $height=$image_info[1];
    // printf(realpath($img_name));   
    // echo var_dump($width,$height);
    // echo $width;
    // echo $height;
    // echo "</pre>";
    // exit();
    // echo $tmp_name;

    if ($error === 0) {
        if ($img_size > 11000000000000) {
            $em = "Sorry! file is too lage";
            header("location: index.php?error=$em");
        } else {
            $img_x = pathinfo($img_name, PATHINFO_EXTENSION);
            // echo($img_x);
            $img_x_lc = strtolower($img_x);

            $allowed_xt = array("jpg", "jpeg", "png","mp4");
            if (in_array($img_x, $allowed_xt)) {
                $new_img_id = uniqid("IMG_", true) . '.' . $img_x_lc;
                $upload_path = './Upload_Image/' . $new_img_id;
                move_uploaded_file($tmp_name, $upload_path);

                $sql_qr = "INSERT INTO `image_detail` (`img_name`, `uniq_id`,`ext`, `category`,`img_width`,`img_height`,`time`) VALUES ('$file_name', '$new_img_id','$img_x_lc', '$file_cat','$width','$height', current_timestamp())";
                $qry=mysqli_query($con, $sql_qr);
                if($qry){
                header("Location: view.php?upload=true");
                }
            }

            //insrtion into database
            else {
                $em = "Only jpg, jpeg and png files are accepted!!";
                header("location: index.php?error=$em");
            }
        }
    } else {
        $em = "Unknown error occured!";
        header("location: index.php?error=$em");
    }
} else {
    header("Location: index.php");
}
