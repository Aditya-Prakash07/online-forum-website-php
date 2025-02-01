<?php
include "partials/_dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Us - ForumHive</title>
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

<div class="container p-5">
    <div class="mt-4 p-5 bg-dark text-light rounded shadow-lg">
        <h3 class="mb-4"><span class="text-warning">ForumHive 🐝</span> Contact Us</h3>
        <h6 class="mb-4">We would love to hear from you! Whether you have questions, feedback, or suggestions, feel free to reach out to us using the contact form below:</h6>

        <form action="contact.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-warning btn-lg">Send Message</button>
        </form>

        <hr class="my-4">

        <h6>If you prefer, you can also reach us at:</h6>
        <p class="text-light">Email: support@forumhive.com</p>
        <p class="text-light">Phone: +1 (800) 123-4567</p>

        <p class="text-light">We look forward to hearing from you and assisting with any inquiries you may have! 🐝✨</p>
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
