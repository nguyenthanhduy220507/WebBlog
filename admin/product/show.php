<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="/img/earth.jpg">
    <title>ADMIN - Show</title>
  </head>
  <body>
  	<?php 
    $id = $_GET['id'];
  	    require 'connect.php';

      $sql = "select * from products
      where id = $id";
      $ketqua = mysqli_query($ket_noi,$sql);
      $result = mysqli_fetch_array($ketqua);
  	?>
    <h1>
 		<?php echo $result['title'] ?>
 	</h1>
 	<p>
 		<?php echo nl2br($result['description']) ?>
 	</p>
     <p>
 		<?php echo nl2br($result['content']) ?>
 	</p>
 	<img src="../photos/<?php echo $result['image'] ?>">

	<?php mysqli_close($ket_noi); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
  </body>
</html>