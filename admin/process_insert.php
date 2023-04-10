<?php 
  $title = $_POST['title'];
  $description = $_POST['description'];
  $content = $_POST['content'];
  $image = $_POST['image'];

  if(empty($title) || empty($description) || empty($content) || empty($image)){
    header('location:form_insert.php?error=Phải điền đầy đủ thông tin');
    exit();
  }

  require '../client/connect.php';

  $sql = "INSERT INTO products (title, description, content,image) VALUES ('$title', '$description', '$content','$image')";
  $result = mysqli_query($ket_noi,$sql);
  
  mysqli_close($ket_noi);

  header('location: index.php?succesful=Thêm thành công');
?>
