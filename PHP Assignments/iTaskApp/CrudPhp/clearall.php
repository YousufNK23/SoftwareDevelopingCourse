<?php
require 'connection.php';

if (isset($_POST["del"])) {
    $clearall= "DELETE FROM iTask_Table";
    $res= mysqli_query($con, $clearall);

    if ($res) {
        echo "<script>if (confirm('Are you sure you want to clear the task list?')){
        alert('Task List Cleared Successfully!'); window.location.href = '../task_list.php';
        }</script>";
    }
}
?>