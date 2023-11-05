<?php
include 'config.php';

if(isset($_POST['submit'])){
$fname = $lname = $email= "";
$fnameerr = $lnameerr = $emailerr = $emailer = "";
   $industry = $_POST['industry'];
   $message = $conn->real_escape_string($_POST['message']);
   if(empty($_POST['name'])){
      $fnameerr = "Please Enter your first name*";
   }
   else{
      $fname = $_POST['name'];
   }
   if(empty($_POST['name2'])){
      $lnameerr = "Please enter your last name*";
   }
   else{
      $lname = $_POST['name2'];
   }
   if(empty($_POST['email'])){
      $emailerr = "Please Enter Your EmailAddress*";
   }
   else{
      $email = $_POST['email'];
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
         echo "valid Email";
      }
      else{
         $emailer = "Invalid email format";
      }
   }
if($email==true && $fname == true){
  
   $sql = "INSERT INTO `web_data`(`fname`, `lname`, `email`, `industry`, `message`) VALUES ('".$fname."','".$lname."','".$email."','".$industry."','".$message."');";
    $result = $conn->query($sql);
  
}
}


?>

