<?php
require 'connection.php';

if (isset($_POST["del"])) {
    $clearall= "DELETE FROM iTask_Table";
    $res= mysqli_query($con, $clearall);

    header("Location: ../task_list.php");
}
?>