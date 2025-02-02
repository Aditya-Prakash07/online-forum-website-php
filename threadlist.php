<?php
include "partials/_dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome to ForumHive - Coding Forums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-black">

    <?php
    include "partials/_header.php";
    ?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `categories` WHERE category_id=$id";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $catname = $row['category_name'];
        $catdesc = $row['category_description'];
    }
    ?>
    <?php 
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=="POST"){
        // insert a thread into database
        $th_title = $_POST['title'];
        $th_desc = $_POST['desc'];
        $sql = "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_category_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '0', CURRENT_TIMESTAMP)";
        $result = mysqli_query($conn, $sql);
        $showAlert = true;
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 60px">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }

    }
    ?>

    <div class="container  mt-1 p-5">
        <div class="mt-4 px-5 py-3 bg-dark  text-light rounded">
            <h3 class="text-warning">Welcome to
                <?php echo $catname; ?> forums.
            </h3>
            <p>
                <?php echo $catdesc; ?>
            </p>
            <hr>
            <h3><span class="text-warning">ForumHive 🐝</span> Rules & Guidelines</h3>
            <ul>
                <li>
                    Welcome to <span class="text-warning">ForumHive 🐝 !</span> To keep this community buzzing with
                    respectful and meaningful discussions, please follow the rules.
                </li>
            </ul>
            <a href="/forumrules.php" class="btn btn-outline-warning btn-lg" role="button">
                Learn more
            </a>

        </div>
    </div>

    <div class="container px-5">
        <div class="mt-4 px-5 py-3 bg-dark  text-light rounded">
            <h3 class="text-warning">Create the Buzz – Ask Your Question! 🐝</h3>
            <hr>
            <br>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label"> <strong>Thread Title</strong></label>
                    <input type="text" class="form-control bg-secondary" id="title" name="title">
                    <div id="title" class="form-text">Keep your title as short and crisp as possible.</div>
                </div>

                <div class="mb-3">
                    <label for="desc" class="form-label"><strong>Elaborate Your Concern</strong></label>
                    <textarea class="form-control bg-secondary" id="desc" name="desc"  style="height: 70px"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-warning btn-lg">Start the Buzz! 🐝</button>
            </form>
        </div>
    </div>

    <div class="container style" style="min-height: 20vh;">
        <br>
        <br>
        <h4 class="text-warning mx-5">Explore the Buzz 🐝</h4>'
        <?php
            $id = $_GET['catid'];
            $sql = "SELECT * FROM `threads` WHERE thread_category_id=$id";
            $result = mysqli_query($conn, $sql);
            $noresult = true;
            while ($row = mysqli_fetch_assoc($result)) {
                $noresult = false;
                $threadid = $row['thread_id'];
                $threadtitle = $row['thread_title'];
                $threaddesc = $row['thread_description'];
                $thread_time = $row['timestamp'];
                echo '<div class="d-flex my-2 mx-5">
                    <div class="flex-shrink-0">
                        <img src="/images/default.png" width="43px" alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 text-light">
                        <p class="font-weight-bold my-0 text-warning">Anonymous User @ '.$thread_time.'</p>
                        <h6 class="text-warning"><a href="thread.php?threadid=' . $threadid . '">' . $threadtitle . '</a></h6>
                        ' . $threaddesc . '
                    </div>
                </div>';
                }
            if ($noresult) {
                echo '<div class="container bg-black text-white">
                        <div class="px-5 rounded">
                            <h1 class="display-6">The hive is quiet...</h1>
                            <p class="lead">Start the buzz with the first conversation! 🐝</p>
                        </div>
                    </div>';
            }
        ?>
    </div>

    <?php
    include "partials/_footer.php"
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>