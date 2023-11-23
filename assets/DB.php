<?php 

    $db_host = "localhost";
    $db_user = "SabadkaZanet";
    $db_password = "SabadkovaZany2589";
    $db_name = "zaklinac";

    $connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if(mysqli_connect_error()){
        echo mysqli_connect_error();
        exit;
    }
    return $connection;
    

?>