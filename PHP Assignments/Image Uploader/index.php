<?php
$server= "localhost";
$username= "root";
$password= "";
$database= "Image_Uploader";
$con= mysqli_connect($server,$username,$password,$database);

if (!$con) {
  die("Connection failed: ".mysqli_connect_error());
}

// $db= "CREATE DATABASE Image_Uploader";
// $res= mysqli_query($con,$db);

// if ($res) {
//   echo "<h1>Database Created Successfully</h1>";
// }

// $tb= "CREATE TABLE IU (
//   ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
//   Name VARCHAR(255),
//   Size VARCHAR(50),
//   Image Text(1000)
//   );";
// $res= mysqli_query($con,$tb);

// if ($res) {
//   echo "<h1>Table Created Successfully</h1>";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader | YNK Mades</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="nav">
    <a class="active logo" href="#">Image Uploader</a>
    <a class="watermark" href="https://github.com/YousufNaveedKhan" target="_blank">YNK Mades</a>
  </div>


  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_FILES["image"])) {
    $Name = $_FILES["image"]["name"];
    $Size = $_FILES["image"]["size"];
    $Tmp_Name = $_FILES["image"]["tmp_name"];
    $Type = $_FILES["image"]["type"];
    $Full_Path = $_FILES["image"]["full_path"];

    if ($Type == "image/png") {
      $Upload= move_uploaded_file($Tmp_Name, "Uploaded-Images/" . $Name);

      if ($Upload) {
        $insert= "INSERT INTO IU (Name, Size, Image) VALUES ('$Name', '$Size', '$Full_Path')";
        $res= mysqli_query($con,$insert);

        if ($res) {
          echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
          <strong>Congratulations!</strong> Your image has been successfully Uploaded.
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
        }
      }
    } else {
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
      <strong>Not Acceptable!</strong> Only PNG files are allowed to upload.
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
      }
    }
  }
  ?><br>
  <form action="index.php" method="post" enctype="multipart/form-data">
  <div class="container">
    <input class="file-input" type="file" id="file-input" name="image" onchange="previewFile()">
    <input type="submit" value="Upload" class="submit-button" id="submit-button">
    <img class="file-preview" id="file-preview" src="" alt="File preview">
  </div>
  </form><br><br> 
  
  <div class="container">
<table class="table table-hover" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image Name</th>
      <th scope="col">Image Size</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_GET["delete"])) {
      $sno = $_GET["delete"];
      $deleteQuery = "DELETE FROM IU WHERE ID= $sno";
      $res = mysqli_query($con, $deleteQuery);

      if ($res) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Image has been deleted!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
      }
    }

    $sql = "SELECT * FROM IU";
    $res = mysqli_query($con, $sql);

    $Counter = 1;
    $TotalRows = mysqli_num_rows($res);
    if ($TotalRows > 0) {
      while ($Row = mysqli_fetch_assoc($res)) {
        echo "<tr>";
        echo "<td>" . $Counter++ . "</td>";
        echo "<td>" . $Row['Name'] . "</td>";
        echo "<td>" . $Row['Size'] . "</td>";
        echo "<td><button type='button' class='btn btn-danger delete' id=" . $Row['ID'] . ">Delete</button> </td>";
        echo "</tr>";
      }
    }
    ?>
  </tbody>
</table><br><br>


<script src="js/script.js"></script>
<script src="js/delete.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>