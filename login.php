<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="bootstrap.bundle.js"></script>
    <title>Photohub</title>
</head>

<body class="body-bg">
    <div class="logo">Photo<span class="logo-inner">hub</span></div>



    <div class="outer">
        <div class="switch">
            <div class="log-in">Login</div>
            <div class="sign-in">SignUp</div>
        </div>
        <div class="login">
            <form action="#">
                <label for="login">Login Form</label>
                <div class="d-flex"><span class="fa fa-user"></span><input type="text" class="lusername"></div>
                <div class="d-flex"><span class="fa fa-lock"></span><input type="lpassword" class="lpassword"></div>
                <div><button class="btn text-white">Login</button></div>
            </form>

            <div class="signup">
                <form action="#">
                    <div><label for="login">SignUp Form</label></div>
                    <div><input type="text" class="susername" id="susername" name="susername"></div>
                    <div><input type="password" id="pass" name="pass" class="password"></div>
                    <div><input type="password" id="cpass" name="cpass" class="cpassword"></div>
                    <div><button class="btn text-white">Sign Up</button></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>