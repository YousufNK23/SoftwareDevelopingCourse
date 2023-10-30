<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (isset($_POST["EdittID"])) {
    $ID= $_POST["EdittID"];
    $E_Title= $_POST["EdittTitle"];
    $E_Desc= $_POST["EdittDesc"];
    $E_Start= $_POST["EdittStart"];
    $E_End= $_POST["EdittEnd"];
    $E_Status= $_POST["EdittStatus"];


        $update= "UPDATE iTask_Table SET Title='$E_Title', Description='$E_Desc', StartDate='$E_Start', EndDate='$E_End', Status='$E_Status' WHERE ID='$ID'";
        $res= mysqli_query($con, $update);

        if ($res) {
            echo "<script>alert('Task Successfully Updated!'); window.location.href = '../task_list.php';</script>";
        }else {
            echo "<script>alert('Error updating task: " . mysqli_error($con) . "'); window.location.href = '../task_list.php';</script>";
        }
    }
}
?>