<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["insert"])) {
        $Title = $_POST["title"];
        $Desc = $_POST["desc"];
        $Start = $_POST["start"];
        $End = $_POST["end"];
        $Status = $_POST["status"];

        if (empty($Title) || empty($Desc) || empty($Start) || empty($End)) {
            echo "<script>alert('All fields are required!'); window.location.href = '../index.php';</script>";
        } else {
            $insert = "INSERT INTO iTask_Table (Title, Description, StartDate, EndDate, Status) VALUES ('$Title','$Desc','$Start','$End','$Status')";
            $res = mysqli_query($con, $insert);

            if ($res) {
                echo "<script>alert('Task added successfully!'); window.location.href = '../index.php';</script>";
            }
        }
    }
}
?>
