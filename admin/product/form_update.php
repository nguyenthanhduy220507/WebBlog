<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="/img/earth.jpg">
    <title>ADMIN - Insert</title>
  </head>
  <body>
    <h1 class="text-center">Sửa thông tin</h1>
    <?php 
      $id = $_GET['id'];

      require 'connect.php';
      $sql = "SELECT * FROM products 
      where
      id = $id";
      $result = mysqli_query($ket_noi,$sql);
      $list = mysqli_fetch_array($result);
      require 'error_succesful.php';
    ?>
    <form method="post" action ="process_update.php" class="ms-5 mt-5"  enctype="multipart/form-data">
      <input type="hidden" class="form-control" name="id" value="<?php echo $list['id'] ?>">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $list['title'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Description</label>
        <input type="text" class="form-control" name="description" value="<?php echo $list['description'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Content</label>
        <input type="text" class="form-control" name="content" value="<?php echo $list['content'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Images new</label>
        <input type="file" class="form-control" name="image_new">
      </div>
      <div class="mb-3">
        <label class="form-label">Images Old</label><br>
        <img src="photos/<?php echo $list['image'] ?>" alt="" height="100">
        <input type="hidden" class="form-control" name="image_old" value="<?php echo $list['image'] ?>">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>
