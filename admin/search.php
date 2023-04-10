<?php
    require '../client/connect.php';

    //search theo pages
    $search = '';
    if (isset($_GET['search'])) {
      $search = $_GET['search'];
    }
    
    $sql = "select * from products
    where title like '%$search%'";
    
    $result = mysqli_query($ket_noi, $sql);

    