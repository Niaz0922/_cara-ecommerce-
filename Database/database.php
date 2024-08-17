<?php

$conn = mysqli_connect("localhost", "root", "", "ecommerce");

if (!$conn) {
    echo "Failed to connect to the database";
    die();
}

?>