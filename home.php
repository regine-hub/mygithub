<?php
    require("./read.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2>Video</h2>
    <?php while($results = mysqli_fetch_array($sqlFiles)) { ?>            
        <video width="615" height="315" controls>
            <source src="video/<?php echo $results['data'] ?>" type="video/mp4">
        </video>
    <?php } ?>
    </div>
</body>
</html>