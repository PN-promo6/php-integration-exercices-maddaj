<!DOCTYPE html>
<html lang="en">

<head>
    <title>Exo 4</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php

                $dirname = "../exo03/img/";
                $images = glob($dirname . "*.jpg");

                foreach ($images as $image) {
                    echo '<img class="d-block w-100" src="' . $image . '" /><br />';
                }

                ?>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</body>

</html> 