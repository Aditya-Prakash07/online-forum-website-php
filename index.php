<?php
  include "_dbconnect.php";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome to ForumHive - Coding Forums</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  include "partials/_header.php"
  ?>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://picsum.photos/2400/800?random=1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/2400/800?random=2" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/2400/800?random=3" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/2400/800?random=4" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/2400/800?random=5" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://picsum.photos/2400/800?random=6" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



  <div class="container mt-3">
    <h3 class="text-center">ForumHive - Browse Categories</h3>
    <div class="row">
<!-- use a for loop to iterate through categories -->
 <?php 
 ?>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card mx-auto" style="width: 17rem;">
          <img src="https://media.istockphoto.com/id/178447404/fr/photo/b%C3%A2timents-daffaires-moderne.jpg?s=612x612&w=0&k=20&c=KDgacnz516dO2YiaMsiyHABoHaBhv5K1CRjHUEbcviQ=" class="card-img-top" alt="java_image">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">View Threads</a>
          </div>
        </div>
      </div>
     
     



      
      

    </div>
  </div>



  <?php
  include "partials/_footer.php"
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>