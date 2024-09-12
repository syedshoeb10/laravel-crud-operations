<?php
if(isset($_POST['update']))
{
    // echo "form submitted";
    include 'database.php';

    $name = $_POST['std_name'];
    $email =$_POST['std_email'];
    $mobile =$_POST['mobile_no'];
    $password =$_POST['pwd']; 
    $course = $_POST['courseName'];
    $id =$_POST['id'];

    // Properly concatenate variables into the SQL query string
    $query = "UPDATE details SET `name`='$name', `email`='$email', `mobile`='$mobile', `password`='$password', `course`='$course' WHERE id=$id ";

    // echo $query; // This will now display the correct query

    // Proceed with executing the query
    if ($conn->query($query) === TRUE) {
        echo "Record updated successfully";
        header("location: list.php");

    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>