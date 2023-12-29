<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["insert"])) {
        $Title = $_POST["title"];
        $Desc = $_POST["desc"];
        $Start = $_POST["start"];
        $End = $_POST["end"];
        $Status = $_POST["status"];

            $insert = "INSERT INTO iTask_Table (Title, Description, StartDate, EndDate, Status) VALUES ('$Title','$Desc','$Start','$End','$Status')";
            $res = mysqli_query($con, $insert);
            header("Location:../index.php");
        }
    }
?>
