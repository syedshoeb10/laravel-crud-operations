<?php
if(isset($_POST["submit"]))
{
    // echo "form submitted";
    include "database.php";

    $name = $_POST['std_name'];
    $email =$_POST['std_email'];
    $mobile =$_POST['mobile_no'];
    $password =$_POST['pwd']; 
    $course = $_POST['courseName'];
    
    
  //  echo "name : $name<br>";
  //  echo "email : $email<br>";
  //  echo "mobile : $mobile<br>";
  //  echo "pass : $password<br>";
  //  echo "couser: $course";

// including database query

  $sql = "INSERT INTO `details` ( `name`, `email`, `mobile`, `password`, `course`) 
  VALUES ('$name', '$email', '$mobile', '$password', '$course')";



 $data;

//  $sql = "CREATE DATABASE management";
 if ($conn->query($sql) === TRUE) {
   echo "Database created successfully";
   header("location:index.php");
 } else {
   echo "Error creating database: " . $conn->error;
 }
 
 $conn->close();
 
}
?>