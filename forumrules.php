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

<div class="container p-5">
    <div class="mt-4 p-5 bg-secondary text-light rounded shadow-lg">
        <h3 class="mb-4"><span class="text-warning">ForumHive 🐝</span> Rules & Guidelines</h3>
        <h6 class="mb-4">Welcome to <span class="text-warning">ForumHive 🐝!</span> To keep this community buzzing with respectful and meaningful discussions, please follow these rules:</h6>

        <ol class="list-unstyled">
            <li class="mb-3">
                <h5 class="text-warning"><strong>1. Be Respectful</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item bg-transparent text-light border-0">Treat all members with kindness and courtesy.</li>
                    <li class="list-group-item bg-transparent text-light border-0">No harassment, hate speech, or discrimination.</li>
                    <li class="list-group-item bg-transparent text-light border-0">Healthy debates are welcome, but personal attacks are not.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>2. No Spam or Self-Promotion</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item bg-transparent text-light border-0">Do not flood threads with repeated messages.</li>
                    <li class="list-group-item bg-transparent text-light border-0">No excessive advertisements or self-promotion.</li>
                    <li class="list-group-item bg-transparent text-light border-0">Affiliate links and promotions require admin approval.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>3. Stay on Topic</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item text-light bg-transparent border-0">Post in the relevant categories.</li>
                    <li class="list-group-item text-light bg-transparent border-0">Keep discussions meaningful and avoid derailing topics.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>4. No Inappropriate or Illegal Content</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item text-light bg-transparent border-0">Do not post NSFW, violent, or illegal material.</li>
                    <li class="list-group-item text-light bg-transparent border-0">No piracy, hacking, or unethical activities.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>5. Keep It Clean & Readable</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item text-light bg-transparent border-0">Avoid excessive CAPS, emojis, and special characters.</li>
                    <li class="list-group-item text-light bg-transparent border-0">Use clear and concise language.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>6. Respect Privacy</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item text-light bg-transparent border-0">Do not share personal or sensitive information.</li>
                    <li class="list-group-item text-light bg-transparent border-0">Protect your own and others’ privacy.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>7. Follow Moderation Guidelines</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item text-light bg-transparent border-0">Moderators can remove content that violates rules.</li>
                    <li class="list-group-item text-light bg-transparent border-0">Repeated violations may lead to warnings or bans.</li>
                </ul>
            </li>
            <li class="mb-3">
                <h5 class="text-warning"><strong>8. Report Issues Responsibly</strong></h5>
                <ul class="list-group">
                    <li class="list-group-item text-light bg-transparent border-0">If you notice rule violations, report them instead of engaging.</li>
                    <li class="list-group-item text-light bg-transparent border-0">Constructive feedback is always welcome.</li>
                </ul>
            </li>
        </ol>

        <hr class="my-4">

        <h6>By participating in <span class="text-warning">ForumHive 🐝</span>, you agree to these rules. Let’s keep this a friendly and buzzing community! 🐝✨</h6>
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