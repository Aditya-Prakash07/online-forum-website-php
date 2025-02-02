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
    <?php 
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=="POST"){
        // insert a thread into comment db
        $comment = $_POST['comment'];
        $sql = "INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES ('$comment', '$id', '0', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 60px">
                    <strong>success!</strong> Your comment has been added.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    ?>

    <div class="container p-5">
        <div class="mt-4 px-5 py-3 bg-dark  text-light rounded">
            <h3 class="text-warning"><?php echo $threadtitle; ?></h3>
            <p>
                <?php echo $threaddesc; ?>
            </p>
            <hr>
            <h3><span class="text-warning">ForumHive 🐝</span></h3>
            <p>This is a peer-to-peer forum for meaningful discussions. Spam, ads, and self-promotion are not allowed. Be respectful—no offensive or abusive content. Stay on topic, contribute thoughtfully, and keep the space valuable for all.</p>
            <p><strong><span class="text-warning">Posted By :</span> Aditya Prakash</strong></p>
        </div>
    </div>

    <div class="container px-5">
        <div class="mt-4 px-5 py-3 bg-dark  text-light rounded">
            <h3 class="text-warning">Post a comment 🐝</h3>
            <hr>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                <div class="mb-3">
                    <label for="comment" class="form-label"><strong>Type your comment</strong></label>
                    <textarea class="form-control bg-secondary" id="comment" name="comment"  style="height: 50px"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-warning btn-lg">Post concern 🐝</button>
            </form>
        </div>
    </div>

    <div class="container mx-5 px-5 style" style="min-height: 30vh;">
        <br>
        <h4 class="text-warning mx-5">Community Buzz 🐝</h4>
        <?php
        $id = $_GET['threadid'];
        $sql = "SELECT * FROM `comments` WHERE thread_id=$id";
        $result = mysqli_query($conn, $sql);
        $noResult = false;
        while( $row = mysqli_fetch_assoc($result)){
            $noResult = true;
            $id = $row['comment_id'];
            $content = $row['comment_content'];
            $comment_time = $row['comment_time'];
           

        echo '<div class="d-flex my-3 mx-5">
                <div class="flex-shrink-0">
                    <img src="/images/default.png" width="43px" alt="...">
                </div>
                <div class="flex-grow-1 ms-3 text-light">
                    <p class="font-weight-bold my-0 text-warning">Anonymous User @ '.$comment_time.'</p>
                    '.$content.'
                </div>
            </div>';
        }
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