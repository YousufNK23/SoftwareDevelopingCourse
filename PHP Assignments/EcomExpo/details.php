<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'EcomExpo');
$sql = "SELECT * FROM Products WHERE Featured=1";
$featured = $con->query($sql);

?>
    <div class="col-md-2"></div>

<div class="col-md-8">
    <div class="row">
        <h2 class="text-center">Product Details:</h2>
        <?php 
        while ($product = mysqli_fetch_assoc($featured)):
        ?>
    </div>
    <div class="col-md-5">
        <h4><?= $product['Title']; ?></h4>
        <img src="<?= $product['Image']; ?>" alt="<?= $product['Title']; ?>" />
        <p class="lprice"><b>Rs <?= $product['Price']; ?></b></p>
        <p class="desc"><?= $product['Description']; ?></p>
        <p class="bname"><?= $product['BrandName']; ?></p>
    </div>
    <?php endwhile; ?>
</div>