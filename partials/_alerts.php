<style>
    .alert {
        position: absolute;
        font: 1.5rem;
        bottom: 180px;
        right: 38%;
        left: 38%;
        background: rgb(234, 222, 0);
        text-align: center;
    }
</style>

    <?php

    if (isset($_GET['showAlert']) && $_GET['showAlert'] == 1) {
        echo '<div class="alert"><span style="color:green; margin-top:1.5rem;">You are signed in! Now you can login</span></div>';
    }
    if (isset($_GET['showerror']) && $_GET['showerror'] == true) {
        echo '<div class="alert"><span style="color:red; margin-top:1.5rem;">User Already Exists!</span></div>';
    }
    if (isset($_GET['cpassError']) && $_GET['cpassError'] == true) {
        echo '<div class="alert"><span style="color:red; margin-top:1.5rem;">Confirm Password not macthed!!</span></div>';
    }
    if (isset($_GET['login']) && $_GET['login'] == true) {
        echo '<div class="alert"><span style="color:green; margin-top:1.5rem;">You are loged in!!</span></div>';
    }
    if (isset($_GET['logerr']) && $_GET['logerr'] == true) {
        echo '<div class="alert"><span style="color:red; margin-top:1.5rem;">Check Username or Passwoed!!</span></div>';
    }
    if (isset($_GET['upload']) && $_GET['upload'] == true) {
        echo '<div class="alert"><span style="color:red; margin-top:1.5rem;">Uploaded!!</span></div>';
    }
    if (isset($_GET['error'])) {
        echo '<div class="alert"><span style="color:red; margin-top:1.5rem;">' . $_GET['error'] . '</span></div>';
    }

    ?>
