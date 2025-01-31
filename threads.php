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
</head>

<body class="bg-black">
  
  <?php
  include "partials/_header.php";
  ?>

  <div class="container mt-5 p-5">
    <div class="mt-4 p-5 bg-warning-subtle  text-dark rounded">
        <h1>☕ Java – The Versatile & Powerful Programming Language </h1>
        <p>
            Java is a powerful, object-oriented, and platform-independent programming language that plays a crucial role in modern software development. Known for its "Write Once, Run Anywhere" capability, Java allows developers to write code that can run on any operating system with a Java Virtual Machine (JVM). Its versatility and reliability make it a preferred choice for building enterprise applications, mobile apps, web platforms, and cloud-based solutions. Java's object-oriented approach promotes modular programming, making code more reusable, maintainable, and scalable.
            <br>
            One of Java’s key strengths is its high performance and security. With features like automatic memory management through garbage collection and built-in security mechanisms, Java ensures stability and protection against vulnerabilities. Its support for multi-threading allows efficient handling of concurrent tasks, making it suitable for high-performance applications. Java is extensively used in enterprise solutions such as banking, e-commerce, and large-scale business systems. It is also the foundation of Android application development, powering millions of mobile apps worldwide.
            <br>
            Beyond mobile and enterprise software, Java plays a significant role in web development, with frameworks like Spring Boot enabling the creation of robust APIs and dynamic web applications. It is widely adopted in big data processing, artificial intelligence, and cloud computing, integrating seamlessly with platforms like AWS, Azure, and IoT devices. With a vast ecosystem of libraries, strong community support, and continuous improvements, Java remains a top choice for developers seeking efficiency, scalability, and cross-platform compatibility in their projects.
        </p>
        <hr>
        <p>This is a peer to peer Forum for sharing knowledge with each other.</p>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-secondary" type="button">Learn More</button>
        </div>
    </div>
  </div>
 
  <div class="container px-5">
        <div class="d-flex align-items-center px-5">
        <div class="flex-shrink-0 px-5">
            <img src="/images/img2.jpg" width = "50px" alt="...">
        </div>
            <div class="flex-grow-1 ms-3 text-light px-5">
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores provident, illum molestias placeat quisquam, quis ad assumenda exercitationem aperiam sint, repellendus nesciunt beatae molestiae blanditiis et ullam perferendis quam eius. Animi hic maiores esse ex?
            </div>
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