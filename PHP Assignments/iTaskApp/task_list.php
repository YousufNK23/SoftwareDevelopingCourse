<?php
require 'CrudPhp/connection.php';

if (isset($_GET["delete"])) {
    $sno = $_GET["delete"];
    $delete = "DELETE FROM iTask_Table WHERE ID= $sno";
    $res = mysqli_query($con, $delete);
    
    if ($res) {
        echo "<script>alert('Task Deleted Successfully!'); window.location.href = 'task_list.php';</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iTaskApp | YNK Mades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-md">
                <a class="navbar-brand" href="index.php" style="color: #fff;">iTaskApp &nbsp; <span style="color: fff; font-weight: bold;">YNK Mades</span></a>
            </div>
        </nav>
    </nav><br><br>

    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Task:</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="CrudPhp/update.php" method="post">
        <input type="hidden" id="EditID" name="EdittID">
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" id="EditTitle" name="EdittTitle">
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <textarea class="form-control" rows="3" id="EditDesc" name="EdittDesc"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">StartDate:</label>
                <input type="date" class="form-control" id="EditStart" name="EdittStart">
            </div>
            <div class="mb-3">
                <label class="form-label">EndDate:</label>
                <input type="date" class="form-control" id="EditEnd" name="EdittEnd">
            </div>
            <label class="form-label">Status:</label>
            <select class="form-select" aria-label="Default select example" id="EditStatus" name="EdittStatus">
                <option value="Not Started">Not Started</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select>
      </div> 
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
      </form>

  </div>
</div>
</div>

    <div class="container">
        <table class="table table-hover" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">StartDate</th>
                    <th scope="col">EndDate</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'CrudPhp/connection.php';
                $sql = "SELECT * FROM iTask_Table";
                $res = mysqli_query($con, $sql);

                $Counter = 1;
                $TotalTask = mysqli_num_rows($res);
                if ($TotalTask > 0) {
                    while ($Task = mysqli_fetch_assoc($res)) {
                        echo "<tr>";
                        echo "<td>" . $Counter++ . "</td>";
                        echo "<td>" . $Task['Title'] . "</td>";
                        echo "<td>" . $Task['Description'] . "</td>";
                        echo "<td>" . $Task['StartDate'] . "</td>";
                        echo "<td>" . $Task['EndDate'] . "</td>";
                        echo "<td>" . $Task['Status'] . "</td>";
                        echo "<td> <button type='button' name='Edit' class='btn btn-primary Edits' id=" . $Task['ID'] . ">Edit</button> &nbsp; <button type='button' class='btn btn-danger delete' id=" . $Task['ID'] . ">Delete</button> </td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <form action="CrudPhp/clearall.php" method="POST">
            <input type="hidden" name="del">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-danger" type="submit">Clear All</button>
            </div>

        </form>
    </div><br><br>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    </script>
    <script src="JS/update.js"></script>
    <script src="JS/delete.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>