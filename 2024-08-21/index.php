<?php
    require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="images/<?= $gambar;?>" alt="" width="200px">
    <img src="images/<?= $gambars[0];?>" alt="" width="200px">
    <?php
        foreach ($gambars as $key) {
            echo "<h1>gambar</h1>";
            echo "<img src='images/$key' alt='' width='200px'>";
            echo '<img src="images/'. $key .'" alt="" width="200px">';
        }
    ?>
</body>
</html>