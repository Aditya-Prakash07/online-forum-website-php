<?php
include "partials/_dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Welcome to ForumHive - Coding Forums</title>
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
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape11.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape12.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape13.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape14.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape15.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape16.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape17.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape18.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape19.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape20.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape21.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape22.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape23.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape24.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape25.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape26.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape27.jpg"
          class="d-block w-100"
          alt="..." />
      </div>
      <div class="carousel-item">
        <img
          src="/images/landscape/landscape28.jpg"
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
    <h3 class="text-center text-warning">ForumHive - Browse Categories</h3>
    <div class="row mt-4">
      <!-- Fetch all the categories -->
      <?php
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($conn, $sql);
        //use a loop to iterate through categories 
        while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'];
          $cat = $row['category_name'];
          $desc = $row['category_description'];
          echo '<div class="col-md-4 mt-4">
                  <div class="card mx-auto" style="width: 17rem">
                    <img
                      src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ="
                      class="card-img-top"
                      alt="java_image" />
                    <div class="card-body">
                      <h5 class="card-title">' .$cat . '</h5>
                      <p class="card-text">
                        ' . htmlspecialchars(substr($desc, 0, 70 )). '...
                      </p>
                      <a href="/threads.php" class="btn btn-primary">View Threads</a>
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