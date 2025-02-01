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
    <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `threads` WHERE thread_id=$id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            $threadtitle = $row['thread_title'];
            $threaddesc = $row['thread_description'];
        }
    ?>

    <div class="container mt-5 p-5">
        <div class="mt-4 p-5 bg-secondary  text-light rounded">
            <h1 class="text-warning"><?php echo $threadtitle; ?></h1>
            <p>
                <?php echo $threaddesc; ?>
            </p>
            <hr>
            <h5><span class="text-warning">ForumHive 🐝</span></h5>
            <p>This is a peer-to-peer forum for meaningful discussions. Spam, ads, and self-promotion are not allowed. Be respectful—no offensive or abusive content. Stay on topic, contribute thoughtfully, and keep the space valuable for all.</p>
            <p><strong><span class="text-warning">Posted By :</span> Aditya Prakash</strong></p>
        </div>
    </div>

    <div class="container mx-5 px-5 style" style="min-height: 30vh;">
        <h3 class="text-warning mx-5">Discussions</h3>
        <?php
        // $id = $_GET['catid'];
        // $sql = "SELECT * FROM `threads` WHERE thread_category_id=$id";
        // $result = mysqli_query($conn, $sql);
        // while( $row = mysqli_fetch_assoc($result)){
        //     $threadid = $row['thread_id'];
        //     $threadtitle = $row['thread_title'];
        //     $threaddesc = $row['thread_description'];

        // echo '<div class="d-flex my-3 mx-5">
        //         <div class="flex-shrink-0">
        //             <img src="/images/default.png" width="43px" alt="...">
        //         </div>
        //         <div class="flex-grow-1 ms-3 text-light">
        //             <h6 class="text-warning"><a href="thread.php">'.$threadtitle.'</a></h6>
        //             '.$threaddesc.'
        //         </div>
        //     </div>';
        //}
        ?>
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