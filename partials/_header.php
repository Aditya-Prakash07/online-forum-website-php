<?php
session_start();

echo '<nav class="navbar navbar-expand-lg bg-black fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand text-warning" href="/">ForumHive 🐝</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-warning"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning" href="/about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active text-warning" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item text-warning" href="#">Action</a></li>
            <li><a class="dropdown-item text-warning" href="#">Another action</a></li>
            <li><hr class="dropdown-divider text-warning"></li>
            <li><a class="dropdown-item text-warning" href="#">Something else here</a></li>
          </ul>
        </li>
       <li class="nav-item">
          <a class="nav-link active text-warning" href="/contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <input class="form-control border-warning" style="margin-left: 100px" type="search" placeholder="Search" aria-label="Search">
        </li>
        <li class="nav-item">
            <button class="btn btn-warning" type="submit" style="margin-left: 103px">Search</button>
        </li>
      </ul>';
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
        echo '      <form class="d-flex" role="search">
        <p class="text-warning m-2 flex-shrink-0"><strong>Welcome '. $_SESSION['username'] .'</strong></p> 
        <a href="/partials/_logout.php" class="btn btn-outline-warning" type="submit">Logout</a>
             
      </form>';
      }
      else{
        echo '
          <div class="mx-2">
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#loginModal">
            Login
            </button>
            <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#signupModal">
            Signup
            </button>
          </div>';
      }
     echo '
      </div>
    </div>
  </nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']==true){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 60px">
                    <strong>Welcome to the Hive! 🐝</strong> Your account is all set—dive in and start buzzing!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
}
?>