
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
        <div class="container">
             <h1 class="h2">Student List </h1>
             <h2><a href="index.php">Add Student</a></h2>
        </div>

        <div class="container">
        <table class="table table-striped table-success">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Course</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>

    <?php
         include "database.php";

         $selectquery = "SELECT * FROM details";

        $query = mysqli_query($conn, $selectquery);

        $nums = mysqli_num_rows($query);
        while($res = mysqli_fetch_array($query)){
        // echo $res['name'] . "<br>";
         ?>
        <tr>
          <td><?php echo $res['id']?></td>
        <td><?php echo $res['name']?></td>
        <td><?php echo $res['email']?></td>
        <td><?php echo $res['mobile']?></td>
        <td><?php echo $res['course']?></td>
        <td>
      <!-- <a href="./stdupdate.php?id=50" class="btn btn-primary btn-sm">Edit</a> -->
       <a href="stdupdate.php?id=<?php echo $res['id']; ?>">Edit</a>
       <a href="deletestd.php?id=<?php echo $res['id']; ?>"" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete </a>
      

       
    
      </td>
        </td>
    </tr>
    <?php

}

?>  
   </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
    
</body>
</html>
