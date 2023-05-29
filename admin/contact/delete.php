<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    require '../product/connect.php';

    $sql = "DELETE FROM contact WHERE id = $id";

    if(mysqli_query($ket_noi, $sql)) {
        header('location:index.php?succesful=Xóa thành công');
    } else {
        header('location:index.php?error=Xóa thất bại');
    }
    mysqli_close($ket_noi);
} 

