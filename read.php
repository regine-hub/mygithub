<?php
    require("./database.php");

    $queryFiles = "SELECT * FROM files";
    $sqlFiles = mysqli_query($connection, $queryFiles);
?>