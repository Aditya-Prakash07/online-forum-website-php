<?php
include "partials/_dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>About ForumHive - Coding Forums</title>
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

<div class="container-fluid p-3">
    <div class="p-3 bg-dark text-light rounded shadow-lg">
        <h3 class="mb-4"><span class="text-warning">ForumHive 🐝</span> About Us</h3>
        <h6 class="mb-4">Welcome to <span class="text-warning">ForumHive 🐝!</span> We are a community of passionate developers, coders, and tech enthusiasts. Our platform is designed to foster collaboration, learning, and problem-solving in the world of coding and technology.</h6>

        <h5 class="text-warning"><strong>Our Mission</strong></h5>
        <p class="text-light">At ForumHive 🐝, we aim to create an inclusive environment where members can share knowledge, seek advice, and engage in meaningful discussions. We believe in the power of community and strive to empower individuals with the skills and resources to succeed in the tech world.</p>

        <h5 class="text-warning"><strong>Our Values</strong></h5>
        <ul class="list-group">
            <li class="list-group-item bg-transparent text-light border-0">Collaboration: We encourage teamwork and knowledge-sharing.</li>
            <li class="list-group-item bg-transparent text-light border-0">Respect: We foster a respectful atmosphere where everyone’s voice matters.</li>
            <li class="list-group-item bg-transparent text-light border-0">Innovation: We embrace new ideas and continuously evolve.</li>
            <li class="list-group-item bg-transparent text-light border-0">Support: We offer help to individuals in their coding journey.</li>
        </ul>

        <h5 class="text-warning"><strong>Why ForumHive 🐝?</strong></h5>
        <p class="text-light">ForumHive 🐝 is not just a forum; it's a community. Whether you're a beginner looking for advice or an experienced developer sharing insights, ForumHive offers a welcoming platform for all. Join us in building a buzzing community of developers.</p>

        <hr class="my-4">

        <h6>We are excited to have you here at <span class="text-warning">ForumHive 🐝</span>! Let’s grow together as we code, share, and learn! 🐝✨</h6>
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
