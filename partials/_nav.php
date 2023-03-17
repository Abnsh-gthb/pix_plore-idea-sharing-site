<?php
session_start();
echo '<nav class="navbar navbar-expand-lg text-large navbar-dark">
<a class="navbar-brand" href="#">Pixplore</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./About.php">About Us</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Category
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">';
      $sql = "SELECT * FROM `category`";
$res = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($res)) {
    echo '<a class="dropdown-item" href=".\view.php?catid=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a>';
}
        
       echo' <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="Categories.php" style="background-color: rgb(216, 186, 245); border-radius: 12px;">Explore All Category</a>
        <a class="dropdown-item mt-1" id="creatCat" onclick="categoryCreat()" style="background-color: rgb(186, 245, 233); border-radius: 12px; cursor: pointer;">Creat A New Category</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="Contact.php">Contact Us</a>
    </li>
  </ul>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-success mx-1 my-2 my-sm-0" type="submit">Search</button>
    </form>';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)   { 
      echo '<a href="partials/_logouthandle.php?uri='.$_SERVER['REQUEST_URI'].'"><button class="btn btn-outline-success mx-1 my-2 my-sm-0" type="submit">Logout</button></a>';
      }
    else{ 
    echo '<button class="btn btn-outline-success mx-1 my-2 my-sm-0" type="submit" onclick="viewlogin()">Login</button>
    <button class="btn btn-outline-danger mx-1 my-2 my-sm-0" type="submit" onclick="viewsignin()">Signup</button>';}
    
echo '</div>
</nav>';
?>
