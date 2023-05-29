<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/Znake-Spotify-v1.0/style.css">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="/img/earth.jpg">
  <title>Admin - Contact</title>
</head>

<body>
  <?php
    require '../product/connect.php';
    // require '../product/search.php';
    // require '../product/page_search.php';
    // undifent name ,...
    $sql = "select * from contact";
    $result = mysqli_query($ket_noi,$sql);
  ?>

  <h1 class="ms-2 text-center">ADMIN - Contact</h1>
  <?php
    require '../menu.php';
    require '../product/error_succesful.php';
  ?>
  <!-- <form class="d-flex mb-3">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" value="<?php echo $search ?>">
    <button class="btn btn-outline-secondary" type="submit"><i class="znake-icon-spotify-search"></i></button>
  </form> -->
  <table class="table table-bordered table-hover mt-4" style="table-layout: fixed;">
    <colgroup>
      <col style="width: 5%">
      <col style="width: 10%">
      <col style="width: 15%">
      <col style="width: 10%">
      <col style="width: 25%">
      <col style="width: 10%">
      <col style="width: 25%">
    </colgroup>
    <th scope="col">Id</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone</th>
    <th scope="col">Message</th>
    <th scope="col">Time Create</th>
    <th scope="col">Action</th>
    </tr>
    <?php foreach ($result as $list) : ?>
      <tr>
        <td><?php echo $list['id'] ?></td>
        <td><?php echo $list['name'] ?></td>
        <td><?php echo $list['email'] ?></td>
        <td><?php echo $list['phone'] ?></td>
        <td><?php echo $list['message'] ?></td>
        <td><?php echo $list['created_at'] ?></td>
        <td class="">
          <a href="show.php?id=<?php echo $list['id'] ?>" class="btn btn-info text-white ms-2 ">Show</a>
          <a href="form_update.php?id=<?php echo $list['id'] ?>" class="btn btn-primary text-white ms-2 ">FeedBack</a>
          <a href="delete.php?id=<?php echo $list['id'] ?>" class="btn btn-danger text-white ms-2">Delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </table>
  <?php 
    // require '../product/prev_next.php';
    mysqli_close($ket_noi);
  ?>




  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>