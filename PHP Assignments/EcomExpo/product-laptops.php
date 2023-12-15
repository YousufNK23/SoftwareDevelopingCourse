<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'EcomExpo');
$sql = "SELECT * FROM Products WHERE Featured=2";
$featured = $con->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>EcomExpo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">EcomExpo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-2">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="product-laptops.php">Laptops</a>
                    <hr>
                    <a class="dropdown-item" href="product-phones.php">Phones</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center">Top Products</h2>
        </div>
    </div>
    <div class="row">
        <?php while ($product = mysqli_fetch_assoc($featured)): ?>
            <div class="col-md-6">
                <h4><?= $product['Title']; ?></h4>
                <img src="<?= $product['Image']; ?>" alt="<?= $product['Title']; ?>" class="img-fluid" />
                <p class="lprice">Rs <?= $product['Price']; ?></p>
                <a href="details.php">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
                </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

</body>

</html>
