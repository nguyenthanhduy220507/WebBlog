<?php 
  $title = $_POST['title'];
  $description = $_POST['description'];
  $content = $_POST['content'];
  $image = $_FILES['image'];

  $folder = 'photos/';
  $file_extension = explode('.', $image['name'])[1];
  $file_name = time() . '.' . $file_extension;
  $path_file = $folder . $file_name;

  // $path_file  = $folder . basename($image['name']);    theo tên file ảnh
  move_uploaded_file($image["tmp_name"],$path_file);


  if(empty($title) || empty($description) || empty($content) || !isset($image) || empty($image)){
    header('location:form_insert.php?error=Phải điền đầy đủ thông tin');
    exit();
  }

  require '../client/connect.php';

  $sql = "INSERT INTO products (title, description, content,image) VALUES ('$title', '$description', '$content','$file_name')";
  $result = mysqli_query($ket_noi,$sql);
  
  mysqli_close($ket_noi);

  header('location: index.php?succesful=Thêm thành công');
?>
