<?php

// print_r($_GET);
include "database.php";


// echo $_GET['id'];

$query = "SELECT * from details WHERE id=" . $_GET['id'];
$result = mysqli_query($conn, $query);

if($result->num_rows > 0){
  $studentData = $result->fetch_assoc();
} else{
  echo "No data found";
}

$conn->close();

// echo "<pre>";
//   print_r($studentData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admission Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="style11.css"> -->
</head>
<body>

<div class="container">
  <h2>Updation  Form <br> <br>
  <?php echo $studentData['name']?></h2>
  
  <h2><a href="list.php">Student List <br> </a></h2>
  <form class="form-horizontal" action="./updatestd.php" method="POST" enctype="multipart/form-data">

    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="std_name" required value="<?php echo $studentData['name'] ?>">
      </div>
    </div>

    <input type="hidden" name="id" value="<?php echo $studentData['id'] ?>">


    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="std_email" required value="<?php echo $studentData['email'] ?>">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="mobile">Mobile No:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="pwd" placeholder="Enter Mobile" name="mobile_no" required value="<?php echo $studentData['mobile'] ?>">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required value="<?php echo $studentData['password'] ?>">
      </div>
    </div>
    `

    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="profile_photo">Profile Photo:</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="profile_photo" name="profile_photo" required>
      </div>
    </div> -->

    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Course Name:</label>
    <div class="col-sm-10">
      <select class="form-select form-control" id="courseName" name="courseName" required>
    <option value="BCA" <?php echo $studentData['course'] == 'BCA' ? 'selected' : ''; ?>>BCA</option>
    <option value="BBA" <?php echo $studentData['course'] == 'BBA' ? 'selected' : ''; ?>>BBA</option>
    <option value="B.Com" <?php echo $studentData['course'] == 'B.Com' ? 'selected' : ''; ?>>B.Com</option>
      </select>
    </div>
  </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="update">update</button>
      </div>
    </div>



  </form>
</div>

</body>
</html>
