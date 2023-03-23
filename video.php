<?php
    require("./database.php");

    if(isset($_POST['upload'])) {
        $title = $_POST['title'];
        $file = $_FILES['file'];
        
        $filename =  $_FILES['file']['name'];
        $filetemp =  $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode(".", $filename);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('avi', 'flv', 'wmv', 'mov', 'mp4');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < (536870912)){
                    $newFilename = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'video/' .$newFilename;
                    move_uploaded_file($filetemp, $fileDestination);

                    $sql = "INSERT INTO files VALUES (null, '$title', '$newFilename')";
                    $sqlQuery = mysqli_query($connection, $sql);

            
                }else {
                    echo "File too large!";
                }
            }else {
                echo 'There was an error on upload';
            }
        }else {
            echo "Cannot Upload this File";
        }
  
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="container">
        <p class="lead text-center fw-bold">Upload File</p>
        <div class="form-group pt-5">
            <form action="/oop/video.php"  enctype="multipart/form-data" method="post">
                <input type="text" name="title" id="title" placeholder="Video Title"  class="form-control">
                <input type="file" name="file" id="file" class="form-control btn btn-outline-info " >
                <input type="submit" value="Upload" name="upload" class="mt-3 btn btn-outline-info">

            </form>
        </div>
    </div>
</body>
</html>