<?php
    require("./database.php");

    if (isset($_GET['id'])) {
        $videoId = $_GET['id'];
    }

    $queryVideo = "SELECT data from files WHERE id = '$videoId' ";
    $videoFile = mysqli_query($connection, $queryVideo);

    $row = mysqli_fetch_array($videoFile);

    $videoName = $row['data'];
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Video</title>

    <style>

      video{
        margin: 100px;
      }

    </style>
</head>
<body>
  <section>
    <div class="row">
      <div class="container p-5"> 
        <video width="300" height="250" controls>
          <source src="video/<?php echo $videoName; ?>" type="video/mp4">
        </video>
      </div>
    </div>
  </section>
</body>
</html>