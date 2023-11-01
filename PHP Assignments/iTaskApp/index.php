<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iTaskApp | YNK Mades</title>
    <style>
        label {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-md">
                <a class="navbar-brand" href="#" style="color: #fff;">iTaskApp &nbsp; <span style="color: fff; font-weight: bold;">YNK Mades</span></a>
            </div>
        </nav>
    </nav><br><br>

    <form action="CrudPhp/insert.php" method="post" id="taskForm">
        <div class="container">
            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Description:</label>
                <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">StartDate:</label>
                <input type="date" class="form-control" id="start" name="start">
            </div>
            <div class="mb-3">
                <label class="form-label">EndDate:</label>
                <input type="date" class="form-control" id="end" name="end">
            </div>
            <label class="form-label">Status:</label>
            <select class="form-select" aria-label="Default select example" id="status" name="status">
                <option value="Not Started">Not Started</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
            </select><br>

            <div class="d-grid gap-2">
                <button class="btn btn-success Insert" type="submit" name="insert">Add To List</button>
            </div>
            </form><br>
        
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="task_list.php" style="font-size: 18px; color: blue; font-weight: 500;">Show Task List</a>
    </div>
    </div>
    <br><br><br>

    <script src="JS/insert.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>