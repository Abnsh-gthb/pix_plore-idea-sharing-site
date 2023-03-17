<?php
require "partials/_dbcon.php"
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        box-sizing: border-box;
    }

    .container_main {
        background: rgba(84, 82, 82, 0.782) url(img_clg_proj/aboutbg.jpg);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-blend-mode: darken;
        min-height: 80vh;
        padding-bottom: 5vh;
    }

    .main {
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        margin-top: 5vh;
    }

    /* nav a,
    div ul li a {
        color: black !important;
        font-weight: 500;
    } */

    img {
        filter: grayscale(50%);
        transition: 0.5s;
        border-radius: 5%;
    }
    
    img:hover {
        border-radius: 8px;
        box-shadow: 0 5px 10px 10px palevioletred;
        filter: grayscale(0%);
        transform: translateZ(10px) scale(1.4);
        border-radius: 5%;
        z-index: 1500;

    }

    .imgrow {
        display: flex;
        flex-wrap: wrap;
        padding: 8px;
        width: 1000px;
        justify-content: center;
        align-items: center;
    }

    /* Create four equal columns that sits next to each other */
    .column {
        flex: 25%;
        max-width: 25%;
        padding: 8px;
        overflow: visible;
    }

    .column img {
        margin-top: 8px;
        vertical-align: middle;
        width: 100%;
    }
    .navbar-brand{
        font-size: 1.25rem !important;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 300px) {
        .column {
            flex: 50%;
            width: auto;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 200px) {
        .column {
            flex: 100%;
            width: auto;
        }
    }
    nav a,div ul li a {
       font-size: 1.25rem;
    }
    .navbar-brand{
        font-size: 1.25rem !important;
    }
</style>

<div class="container_main">
    <?php include "partials/_navAll.php" ?>
    <div class="main">
        <div class="imgrow">
            <div class="column">
                <img src="img_clg_proj/Abinash.jpeg" role="button" data-toggle="popover" data-trigger="focus"
                    title="Abinash Chakraborty"
                    data-content="And here's some amazing content. It's very engaging. Right?">
                <img src="img_clg_proj/Avik.jpg" role="button" data-toggle="popover" data-trigger="focus"
                    title="Avik Roy" data-content="And here's some amazing content. It's very engaging. Right?">
            </div>
            <div class="column">
                <img src="img_clg_proj/preeti.jpg" role="button" data-toggle="popover" data-trigger="focus"
                    title="Preeti Jinta" data-content="And here's some amazing content. It's very engaging. Right?">
                <img src="img_clg_proj/prasenjit.jpg" role="button" data-toggle="popover" data-trigger="focus"
                    title="Prasenjit Chatterjee"
                    data-content="And here's some amazing content. It's very engaging. Right?">
                <img src="img_clg_proj/aysswariya.jpg" role="button" data-toggle="popover" data-trigger="focus"
                    title="Aiswarya Bachchan"
                    data-content="And here's some amazing content. It's very engaging. Right?">
            </div>
        </div>
        <!-- <div class="leftimages">
            <div class="images-grid">
                <img class="tall" id="img" src="img_clg_proj/Abinash.jpeg" alt="">
                <img class="small" id="img" src="img_clg_proj/Avik.jpg" alt="">
                <img class="wide" id="img" src="img_clg_proj/preeti.jpg" alt="">
                <img class="big" id="img" src="img_clg_proj/prasenjit.jpg" alt="">
                <img class="tall" id="img" src="img_clg_proj/aysswariya.jpg" alt="">
            </div>
        </div> -->
        <div class="rightdetails">
            <h4 style="color: cyan;">Team Members</h4>
            <div class="details" style="width: 80%; min-height: 40vh;
        margin-right: 10vh;
        max-height: 50vw;
        border-radius: 12px;
        padding: 10px 10px;
        overflow: hidden;
        overflow-y: scroll;
        background: rgba(46, 45, 45, 0.114); 
        background-blend-mode: darken;">
            <div style=" width: 40vw;
            height: 50vh;
            margin: 12px;
            color:white;
            border-radius: 12px;">
                    <div>
                        <div>
                            <h5 style="color: bisque;">Abinash Chakraborty (Team lead)</h5>
                            <p style="width: 80%; margin-left: 1rem;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse veniam officia
                                perspiciatis
                                similique, temporibus consequatur amet ipsa eveniet suscipit illo?
                            </p>
                        </div>
                        <div>
                            <h5 style="color: bisque;">Avik Roy</h5>
                            <p style="width: 80%; margin-left: 1rem;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse veniam officia
                                perspiciatis
                                similique, temporibus consequatur amet ipsa eveniet suscipit illo?
                            </p>
                        </div>
                        <div>
                            <h5 style="color: bisque;">Aiswarya Bachchan</h5>
                            <p style="width: 80%; margin-left: 1rem;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse veniam officia
                                perspiciatis
                                similique, temporibus consequatur amet ipsa eveniet suscipit illo?
                            </p>
                        </div>
                        <div>
                            <h5 style="color: bisque;">Prasenjit Chatterjee</h5>
                            <p style="width: 80%; margin-left: 1rem;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse veniam officia
                                perspiciatis
                                similique, temporibus consequatur amet ipsa eveniet suscipit illo?
                            </p>
                        </div>
                        <div>
                            <h5 style="color: bisque;">Preeti Jinta</h5>
                            <p style="width: 80%; margin-left: 1rem;">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse veniam officia
                                perspiciatis
                                similique, temporibus consequatur amet ipsa eveniet suscipit illo?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script>
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<?php include "partials/_footer.php";include "partials/_addCategory.php"; ?>