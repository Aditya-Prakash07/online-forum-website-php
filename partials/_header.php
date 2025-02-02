<?php

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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 border-warning" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
            <div class="mx-2">
        <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#loginModal">
        Login
        </button>
        <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#signupModal">
        Signup
        </button>
      </div>
    </div>
  </div>
</nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
?>