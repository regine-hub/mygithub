<?php
    require("./database.php");

    if (isset($_POST['edit'])) {
        $updateId = $_POST['updateId'];
        $updateTitle = $_POST['updateTitle'];
        $updateData = $_POST['updateData'];
    }

    if (isset($_POST['update'])) {
        $updatedId = $_POST['updatedId'];
        $updatedTitle = $_POST['updateTitle'];
        $updatedData = $_POST['updatedData'];

        $updateQuery = "UPDATE files SET 
        title='$updatedTitle' , 
        data = '$updatedData'
        WHERE id = $updatedId ";

        $sqlUpdate = mysqli_query($connection ,$updateQuery);
        echo "<script> alert('Account Updated Succesfully!') </script>";
        header('Location: http://localhost/oop/table.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP TEST VIDEOS</title>
</head>
<body>
   <div class="container">
    <p class="lead">UPDATE VIDEO</p>
    <form action="/oop/update.php" method="post">
        <input type="text" name="updateTitle" value="<?php echo $updateTitle ?>" class="form-control">
        <input type="submit" value="Update" name="update" class="btn btn-outline-primary">
        <input type="hidden" name="updatedData" value="<?php echo $updateData ?>">
        <input type="hidden" name="updatedId" value="<?php echo $updateId ?>" >
    </form>
    <!-- TABLE -->
    
    <!-- END CONTAINER -->
   </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>