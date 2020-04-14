<!DOCTYPE html>
<html lang="en">

<head>
    <title>Exo 3</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php

        $dirname = "img/";
        $images = glob($dirname . "*.jpg");

        foreach ($images as $image) {
            echo '<img src="' . $image . '" /><br />';
        }

        ?>
    </section>
</body>

</html> 