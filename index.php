<?php
require "partials/_dbcon.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container_main {
            background: rgba(5, 5, 5, 0.517) url(img_clg_proj/photo1.jfif);
            min-height: 80vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-blend-mode: darken;
        }

        .innercontainer {
            display: flex;
            flex-direction: row;
            margin-top: 14vh;
            color: white;
            min-height: 50vh;
            position: relative;
        }


        .intro {
            margin-left: 18vw;
            width: 30vw;
            margin-right: 20vw;
        }

        nav {
            background-color: rgba(rgb(255, 255, 255), rgb(242, 245, 242), rgb(255, 255, 255), .300);
        }

        .right-div {
            /* display: flex;
            align-items: center;
            justify-content: space-around; */
            /* min-width: 30rem; */
            height: auto;
            padding: 0;
            font-family: sans-serif;
            background: transparent;
            text-align: center;
            margin-right: 2vh;
        }

        .right-div h1 {
            float: left;
            font-size: 40px;
            border-bottom: 6px solid rgba(218, 245, 12, 0.639);
            margin-bottom: 50px;
            padding: 0 0;
        }

        .txtbox {
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid rgba(218, 245, 12, 0.639);

        }

        .txtbox i {
            width: 26px;
            float: left;
            text-align: center;
        }

        .txtbox input {
            border: none;
            outline: none;
            background: transparent;
            background-color: transparent;
            color: white;
            font-size: 18px;
            width: 150px;
            float: left;
            margin: 0 10px;
        }

        .bttn {
            width: 100%;
            background: none;
            border: 2px solid rgba(218, 245, 12, 0.639);
            color: white;
            border-radius: 5px;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: .5s;
        }

        .bttn:hover {
            background-color: rgba(218, 245, 12, 0.439);
        }

        .hidden {
            display: none;
        }

        nav a,
        div ul li a {
            font-size: 1.25rem;
        }

        .navbar-brand {
            font-size: 1.25rem !important;
        }
    </style>
    <link rel="stylesheet" href="loginstyle.css">
</head>

<body>
    <div class="container_main">
        <?php include "partials/_nav.php" ?>
        <?php include "partials/_alerts.php" ?>
        <div class="innercontainer">
            <div class="intro">
                <span id="play" class="logo">Pix<span class="logo-inner">plore</span><audio
                        src="Pixplore theme track.mp3" id="audio"></audio> </span>
                <!-- <p style="font-size:6rem;">Pixplore</p> -->
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque necessitatibus nulla.</p>
                <button class="btn btn-danger mr-4 mt-2" data-toggle="modal" data-target="#uploadModal">Upload</button>
                <a href="view.php"><button class="btn btn-danger mt-2">Explore</button></a>
                <?php
                include "partials/_uploadModal.php"
                ?>
            </div>
            <div class="right-div">
                <form action="partials/_loginhandle.php" method="post" class="hidden" id="log">
                    <div class="logbox">
                        <h1>Login</h1>
                        <div class="txtbox">
                            <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                            <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                            <input type="text" placeholder="Username" name="uname" value="" required>
                        </div>
                        <div class="txtbox">
                            <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                            <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                            <input type="password" placeholder="Password" name="pass" value="" required>
                        </div>
                        <button class="bttn" type="submit" name="login" onClick="viewlogin()">Log in</button>
                    </div>
                </form>
                <form action="partials/_signinhandle.php" method="post" id="sign" name="signinform">
                    <div class="right-div">
                        <div class="logbox">
                            <h1>Sign in</h1>
                            <div class="txtbox">
                                <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                                <input type="text" placeholder="Username" name="uname" value="" required>
                            </div>
                            <div class="txtbox">
                                <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                                <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                <input type="password" placeholder="Password" name="pass" value="" required>
                            </div>
                            <div class="txtbox">
                                <!-- <i class="fa fa-lock" aria-hidden="true"></i> -->
                                <i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
                                <input type="password" placeholder="Confirm Password" name="cpass" value="" required>
                            </div>
                            <button class="bttn" type="submit" name="signin">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function viewlogin() {
            var sign = document.getElementById("sign");
            var log = document.getElementById("log");
            sign.classList.add("hidden");
            log.classList.remove("hidden");
        }

        function viewsignin() {
            var sign = document.getElementById("sign");
            var log = document.getElementById("log");
            sign.classList.remove("hidden");
            log.classList.add("hidden");
        }

        let play = document.getElementById('play');
        let audio = document.getElementById('audio');
        let count = 0;
        play.addEventListener('click', (e) => {
            if (count == 0) {
                count = 1;
                audio.play();
            } else {
                count = 0;
                audio.pause();
            }
        })
    </script>

    <?php include "partials/_addCategory.php";
    include "partials/_footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>

<!-- INSERT INTO `category` (`cat_id`, `cat_name`, `cat_desc`, `username`, `time`) VALUES (NULL, 'car', 'This is Category where everybody can Upload and view their images all about cars', '00', current_timestamp()); -->