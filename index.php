<?php
include "partials/_dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome to ForumHive - Coding Forums</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100..900&family=Pacifico&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black">

  <?php
  include "partials/_header.php";
  ?>
  <!-- Slider starts here -->
  <div
    id="carouselExampleAutoplaying"
    class="carousel slide"
    data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img
          src="/images/landscape/landscape1.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape2.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape3.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape4.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape5.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape6.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape7.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape8.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape9.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape10.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
    </div>
    <button
      class="carousel-control-prev"
      type="button"
      data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button
      class="carousel-control-next"
      type="button"
      data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- Categories container starts here -->
  <div class="container mt-4">
    <br>
    <h3 class="text-center text-warning">ForumHive - Browse Categories</h3>
    <div class="row mt-4 g-0">
      <!-- Fetch all the categories -->
      <?php
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      //use a loop to iterate through categories 
      while ($row = mysqli_fetch_assoc($result)) {
        // echo $row['category_id'];
        // echo $row['category_name'];
        $id = $row['category_id'];
        $cat = $row['category_name'];
        $desc = $row['category_description'];
        echo '<div class="col-md-6 my-4">
          <div class="card mx-auto bg-black text-light" style="width: 21rem">
            <img
              src="/images/portrait/portrait' . $id . '.jpg"
              class="card-img-top img-fluid"
              alt="' . $cat . ' image" 
              style="height: 200px; object-fit: cover;" />
            <div class="card-body text-decoration-none">
              <h5 class="card-title"><a class="text-warning text-decoration-none" href="/threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
              <p class="card-text text-light">
                ' . htmlspecialchars(substr($desc, 0, 70)) . '...
              </p>
              <a href="/threadlist.php?catid=' . $id . '" class="btn btn-warning">View Threads</a>
            </div>
          </div>
        </div>';
      }
      ?>
    </div>
  </div>

  <?php
  include "partials/_footer.php"
  ?>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>