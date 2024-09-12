<?php

$id=$_GET['id'];
// echo $id;

include 'database.php';
$query = "DELETE from details WHERE id=$id";

// Proceed with executing the query
if ($conn->query($query) === TRUE) {
    echo "Record updated successfully";
    header("location: list.php");

} else {
    echo "Error updating record: " . $conn->error;
}


?>