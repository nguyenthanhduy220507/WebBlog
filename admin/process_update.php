<?php 
  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $content = $_POST['content'];
  $image_new = $_FILES['image_new'];
  
  if(isset($image_new) && $image_new['size'] > 0){
      $folder = 'photos/';
      $file_extension = explode('.', $image_new['name'])[1];
      $file_name = time() . '.' . $file_extension;
      $path_file = $folder . $file_name;
      // $path_file  = $folder . basename($image_new['name']);    theo tên file ảnh
      move_uploaded_file($image_new["tmp_name"],$path_file);
      $image = $file_name;
  }else{
      $image = $_POST['image_old'];
  }

  if(empty($title) || empty($description) || empty($content)){
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
