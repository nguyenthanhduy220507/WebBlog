<?php 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];


  if(empty($name) || empty($email) || empty($phone) || empty($message)){
    header('location:contact.php?error=Phải điền đầy đủ thông tin');
    exit();
  }

  require 'connect.php';

  $sql = "INSERT INTO contact (name, email, phone,message) VALUES ('$name', '$email', '$phone','$message')";
  $result = mysqli_query($ket_noi,$sql);
  
  mysqli_close($ket_noi);

  header('location: contact.php?succesful=Contact của bạn đã được gửi !!!');
?>
