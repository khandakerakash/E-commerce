<?php
    // Database establishing
    $con = mysqli_connect("localhost", "root", "", "ecommerce_db");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //$con->close();
?>