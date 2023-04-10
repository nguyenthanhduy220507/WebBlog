<?php 
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $content = $_POST['content'];
  $image = $_POST['image'];

  if(empty($title) || empty($description) || empty($content) || empty($image)){
    header('location:form_update.php?id='.$id.'&error=Phải điền đầy đủ thông tin');
    exit();
  }

  require '../client/connect.php';

  $sql = "update products
  set
  title = '$title',
  description = '$description',
  content = '$content',
  image = '$image'
  where
  id = '$id'
  ";
  $result = mysqli_query($ket_noi,$sql);
  
  mysqli_close($ket_noi);

  header('location:index.php?succesful=Sửa thành công');
?>
