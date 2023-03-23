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
  <title>Video List</title>
</head>
<body>
<div class="container">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Video ID</th>
        <th>Video Title</th>
      </tr>
    </thead>
    <tbody>
      <?php while($result = mysqli_fetch_array($sqlFiles))
      { 
      ?> 
      <tr>
        <td><?php echo $result['id'] ?></td>
        <td><a <?php $id = $result['id']; echo "href=/oop/templates/html-content.php?id=$id" ?> ><?php echo $result['title'] ?></a></td>
        <td colspan="2" class="d-flex">
                        <div class="form-group">
                            <form action="/oop/update.php" method="post">
                                <input type="submit" name='edit' class="btn btn-outline-info" value="EDIT">
                                <input type="hidden" name="updateId" value="<?php echo $result['id'] ?>">
                                <input type="hidden" name="updateTitle" value="<?php echo $result['title'] ?>">
                                <input type="hidden" name="updateData" value="<?php echo $result['data'] ?>" >
                            </form>
                        </div>
                        <div class="form-group ms-3">
                        <form action="/oop/delete.php" method="post">
                            <input type="submit" name="delete" value="Delete" class="btn btn-outline-danger" >
                            <input type="hidden" name="deleteId" value="<?php echo $result['id'] ?>">
                        </form>
                        </div>
                    </td>
                </tr>
           <?php 
           }
           ?>
            
        </tbody>
    </table>
</div>
</body>
</html>