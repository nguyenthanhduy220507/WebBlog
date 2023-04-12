<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $content = $_POST['content'];


  if(empty($name) || empty($email) || empty($phone) || empty($content)){
    header('location:contact.php?error=Phải điền đầy đủ thông tin');
    exit();
  }

  require 'connect.php';

  $sql = "INSERT INTO contact (name, email, phone,content) VALUES ('$name', '$email', '$phone','$content')";
  $result = mysqli_query($ket_noi,$sql);
  
  mysqli_close($ket_noi);

  header('location: contact.php?succesful=Contact của bạn đã được gửi !!!');
?>
