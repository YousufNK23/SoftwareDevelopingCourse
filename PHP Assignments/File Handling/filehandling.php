<?php

$f1 = fopen("vault/F1.txt", "r");
$f2 = fopen("vault/F2.txt", "r");
$f3 = fopen("vault/F3.txt", "r");
$f4 = fopen("vault/F4.txt", "r");
$f5 = fopen("vault/F5.txt", "r");
$f6 = fopen("vault/F6.txt", "r");
$f7 = fopen("vault/F7.txt", "r");
$f8 = fopen("vault/F8.txt", "r");
$f9 = fopen("vault/F9.txt", "r");
$f10 = fopen("vault/F10.txt", "r");
$f11 = fopen("vault/F11.txt", "r");
$f12 = fopen("vault/F12.txt", "r");
$f13 = fopen("vault/F13.txt", "r");

if (!$f1 || !$f2 || !$f3 || !$f4 || !$f5 || !$f6 || !$f7 || !$f8 || !$f9 || !$f10 || !$f11 || !$f12 || !$f13) {
    die("One or more files do not exist.");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-md">
                <a class="navbar-brand" href="#" style="color: #fff;">File Handling &nbsp; <span style="color: fff; font-weight: bold;">YNK Mades</span></a>
            </div>
        </nav>
    </nav><br><br>

    <div class="container">
        <h1 style="text-align: center;">Seerat Un Nabi (peace be upon him)</h1><br>
        <?php
        while ($seerat = fgets($f1)) {
            echo $seerat;
        }
        ?>
        <br><br><hr><br><br>
    </div>
    <div class="container">
        <h1 style="text-align: center;">Details of 12 Companions (R.A)</h1><br>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name of the companion</th>
                    <th scope="col">Date of birth</th>
                    <th scope="col">Date of death</th>
                    <th scope="col">City of residence</th>
                    <th scope="col">Place of birth</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php echo fgets($f2); ?></td>
                    <td><?php echo fgets($f2); ?></td>
                    <td><?php echo fgets($f2); ?></td>
                    <td><?php echo fgets($f2); ?></td>
                    <td><?php echo fgets($f2); ?></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td><?php echo fgets($f3); ?></td>
                    <td><?php echo fgets($f3); ?></td>
                    <td><?php echo fgets($f3); ?></td>
                    <td><?php echo fgets($f3); ?></td>
                    <td><?php echo fgets($f3); ?></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td><?php echo fgets($f4); ?></td>
                    <td><?php echo fgets($f4); ?></td>
                    <td><?php echo fgets($f4); ?></td>
                    <td><?php echo fgets($f4); ?></td>
                    <td><?php echo fgets($f4); ?></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td><?php echo fgets($f5); ?></td>
                    <td><?php echo fgets($f5); ?></td>
                    <td><?php echo fgets($f5); ?></td>
                    <td><?php echo fgets($f5); ?></td>
                    <td><?php echo fgets($f5); ?></td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td><?php echo fgets($f6); ?></td>
                    <td><?php echo fgets($f6); ?></td>
                    <td><?php echo fgets($f6); ?></td>
                    <td><?php echo fgets($f6); ?></td>
                    <td><?php echo fgets($f6); ?></td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td><?php echo fgets($f7); ?></td>
                    <td><?php echo fgets($f7); ?></td>
                    <td><?php echo fgets($f7); ?></td>
                    <td><?php echo fgets($f7); ?></td>
                    <td><?php echo fgets($f7); ?></td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td><?php echo fgets($f8); ?></td>
                    <td><?php echo fgets($f8); ?></td>
                    <td><?php echo fgets($f8); ?></td>
                    <td><?php echo fgets($f8); ?></td>
                    <td><?php echo fgets($f8); ?></td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td><?php echo fgets($f9); ?></td>
                    <td><?php echo fgets($f9); ?></td>
                    <td><?php echo fgets($f9); ?></td>
                    <td><?php echo fgets($f9); ?></td>
                    <td><?php echo fgets($f9); ?></td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td><?php echo fgets($f10); ?></td>
                    <td><?php echo fgets($f10); ?></td>
                    <td><?php echo fgets($f10); ?></td>
                    <td><?php echo fgets($f10); ?></td>
                    <td><?php echo fgets($f10); ?></td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td><?php echo fgets($f11); ?></td>
                    <td><?php echo fgets($f11); ?></td>
                    <td><?php echo fgets($f11); ?></td>
                    <td><?php echo fgets($f11); ?></td>
                    <td><?php echo fgets($f11); ?></td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td><?php echo fgets($f12); ?></td>
                    <td><?php echo fgets($f12); ?></td>
                    <td><?php echo fgets($f12); ?></td>
                    <td><?php echo fgets($f12); ?></td>
                    <td><?php echo fgets($f12); ?></td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td><?php echo fgets($f13); ?></td>
                    <td><?php echo fgets($f13); ?></td>
                    <td><?php echo fgets($f13); ?></td>
                    <td><?php echo fgets($f13); ?></td>
                    <td><?php echo fgets($f13); ?></td>
                </tr>
            </tbody>
        </table>
    </div><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
