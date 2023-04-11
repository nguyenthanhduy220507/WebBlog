<?php
    require '../client/connect.php';

    //search theo pages
    $search = '';
    if (isset($_GET['search'])) {
      $search = $_GET['search'];
    }
    
    //pages
    $page = 1;
    if (isset($_GET['page'])) {
      $page = $_GET['page'];
    }
    
    $sql_page = "select count(*) from products where title like '%$search%'";
    $result_page = mysqli_query($ket_noi, $sql_page);
    $array_result_page = mysqli_fetch_array($result_page);
    $total_value_page = $array_result_page['count(*)'];
    
    $value_in_page = 3;
    
    $page_value = ceil($total_value_page / $value_in_page);
    
    $offset = $value_in_page * ($page - 1);
    
    $sql = "select * from products
    where title like '%$search%'
    limit $value_in_page
    offset $offset
    ";
    
    $result = mysqli_query($ket_noi, $sql);
    
    