<?php

    require("./database.php");
    if (isset($_POST['delete'])) {
        $deleteId = $_POST['deleteId']; 

        $deleteQuery = "DELETE FROM files WHERE id = $deleteId";
        $sqlDelete = mysqli_query($connection, $deleteQuery);

        echo "<script> alert('Account Deleted Successfully!') </script>";
        header('Location: http://localhost/oop/table.php');
    }else{
        header('Location: http://localhost/oop/table.php');
    }
?>