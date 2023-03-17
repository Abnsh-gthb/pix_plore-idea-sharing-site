<?php

include "_dbcon.php";

$showerror=false;
$cpassError=false;
$showAlert=false;


if(isset($_POST['signin'])){
    $user=$_POST['uname'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    $existSql="SELECT * FROM `users` WHERE uname='$user'";
    $res=mysqli_query($con,$existSql);
    $row_num=mysqli_num_rows($res);
    if($row_num>0){
        $showerror=true;
        header("Location:..\index.php?showerror=true");
    }
    else{
        if($pass==$cpass){
            // $hash=password_hash($pass,PASSWORD_DEFAULT);
            $hash=password_hash($pass,PASSWORD_DEFAULT);
            $sql="INSERT INTO `users` (`uname`, `password`) VALUES ('$user', '$hash')";
            $result=mysqli_query($con,$sql);
            if($result){
                $showAlert=true;
                header("Location:..\index.php?showAlert=".$showAlert);
            }
        }
        else{
            $cpassError=true;
            header("Location:..\index.php?cpassError=true");
        }
    }
}


?>