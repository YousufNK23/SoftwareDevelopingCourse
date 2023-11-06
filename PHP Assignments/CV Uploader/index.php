<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "CV_Uploader";
$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
// $db= "CREATE DATABASE CV_Uploader";
// $res= mysqli_query($con,$db);

// if ($res) {
//     echo "<h1>Database Created Successfully</h1>";
// }else {
//     echo "Error creating database: ".mysqli_error($con);
// }

// $tb= "CREATE TABLE CVU (
//     ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
//     Name VARCHAR(250),
//     Size VARCHAR(50),
//     Full_Path VARCHAR(250),
//     Image TEXT(1000)    
//     );";
// $res= mysqli_query($con,$tb);

// if ($res) {
//     echo "<h1>Table Created Successfully</h1>";
// }else {
//     echo "Error creating table: ".mysqli_error($con);
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>CV Uploader | YNK Mades</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Add the PDFObject library -->
  <script src="pdfobject.min.js"></script>
</head>

<body>
  <!-- Navbar -->
  <div class="nav">
    <a class="active logo" href="#">CV Uploader</a>
    <a class="watermark" href="https://github.com/YousufNaveedKhan" target="_blank">YNK Mades</a>
  </div>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES["file"])) {
      $Name = $_FILES["file"]["name"];
      $Size = $_FILES["file"]["size"];
      $Tmp_Name = $_FILES["file"]["tmp_name"];
      $Type = $_FILES["file"]["type"];
      $Full_Path = $_FILES["file"]["full_path"];

      if ($Type == "application/pdf") {
        $Upload = move_uploaded_file($Tmp_Name, "CV_Vault/" . $Name);

        if ($Upload) {
          $Insert = "INSERT INTO CVU (Name, Size, Image) VALUES ('$Name', '$Size', '$Full_Path')";
          $res = mysqli_query($con, $Insert);

          if ($res) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Congratulations!</strong> Your Resume has been successfully Uploaded.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
          }
        }
      } else {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Not Acceptable!</strong> Only PDF files are allowed to upload.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
      }
    }
  }
  ?><br>
  
  <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="container">
      <input class="file-input" type="file" id="file-input" name="file">
      <input type="submit" value="Upload" id="submit-button" class="submit-button">
    </div>
  </form><br>

  <div class="container">

    <table class="table table-hover" id="myTable">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">File Name</th>
          <th scope="col">File Size</th>
          <th scope="col">Action</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if (isset($_GET["delete"])) {
          $sno = $_GET["delete"];
          $deleteQuery = "DELETE FROM CVU WHERE ID= $sno";
          $res = mysqli_query($con, $deleteQuery);

          if ($res) {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> File has been deleted!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
          }
        }

        $sql = "SELECT * FROM CVU";
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

    <script src="js/delete.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
        $('#myTable').DataTable();
      });
    </script>
</body>

</html>
