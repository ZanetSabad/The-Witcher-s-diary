<?php

    require "assets/DB.php";

    $sql = "SELECT * FROM bestiar";

    $result = mysqli_query($connection, $sql);

    $beasts = mysqli_fetch_all($result);
    var_dump($beasts);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulář</title>
</head>
<body>
    <p>Ahoj</p>
</body>
</html>