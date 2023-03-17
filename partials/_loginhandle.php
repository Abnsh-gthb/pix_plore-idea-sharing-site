<?php
$login=false;
$logerr=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include '_dbcon.php';

    $user=$_POST['uname'];
    $password=$_POST['pass'];   
    // $uri=$_GET['continue']; 
    // $sql="Select * from user_details where user_email='$email'";
    $sql="SELECT * FROM `users` WHERE uname='$user'";;
    $res=mysqli_query($con,$sql);
    $num=mysqli_num_rows($res);
    $fetch=mysqli_fetch_assoc($res);
    $pass=$fetch['password'];
    $pass_hash=password_verify($password,$pass) ;
    // echo var_dump($pass_hash);
    // exit();
    if($num==1 && $pass_hash){
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['useremail']=$user;
            // header("Location:".$uri);
            header("Location:..\index.php?login=true");
        }
        else{
            header("Location:..\index.php?logerr=true");
        }
    }

?>
?>