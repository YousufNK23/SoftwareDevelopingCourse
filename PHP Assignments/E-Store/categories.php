<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Store | YNK Mades</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e72ec5eeea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=1.0">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="logo"><b style="font-size: 2rem; font-weight: bold; color: #369;">E-Store</b></div>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Service</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Shop Grid</a>
                        <a class="dropdown-item" href="#">Cart</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Checkout</a>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Pages</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            </ul>
            <div class="watermark">
                <span><b style="font-size: 1rem; font-weight: bold; color: #369;">YNK Mades</b></span>
            </div>
        </div>
    </nav><br><br>


    <?php
    function displaySelectedCategories()
    {
        $Categories = [
            '1' => "<section name='Mobile_Phones'>
    <div class='container'>
        <div class='row'>
            <div class='col-md-4 col-sm-6'>
                <div class='box'>
                    <img src='images/mobile phones/iphone xr.jpg'>
                    <div class='box-content'>
                        <h3 class='title'>IPHONE XR</h3>
                        <span class='post'>Company: Apple</span>
                        <ul class='icon'>
                            <li><a href='#'><i class='fa fa-search'></i></a></li>
                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-6'>
                <div class='box'>
                    <img src='images/mobile phones/iphone 13 pro max.jpg'>
                    <div class='box-content'>
                        <h3 class='title'>IPHONE 13 PRO MAX</h3>
                        <span class='post'>Company: Apple</span>
                        <ul class='icon'>
                            <li><a href='#'><i class='fa fa-search'></i></a></li>
                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-6'>
                <div class='box'>
                    <img src='images/mobile phones/iphone 13.webp'>
                    <div class='box-content'>
                        <h3 class='title'>IPHONE 13</h3>
                        <span class='post'>Company: Apple</span>
                        <ul class='icon'>
                            <li><a href='#'><i class='fa fa-search'></i></a></li>
                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-6'>
                <div class='box'>
                    <img src='images/mobile phones/oppo a96.jpg'>
                    <div class='box-content'>
                        <h3 class='title'>Oppo A96</h3>
                        <span class='post'>Company: Oppo</span>
                        <ul class='icon'>
                            <li><a href='#'><i class='fa fa-search'></i></a></li>
                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-6'>
                <div class='box'>
                    <img src='images/mobile phones/oppo f19 pro.webp'>
                    <div class='box-content'>
                        <h3 class='title'>Oppo F19 Pro</h3>
                        <span class='post'>Company: Oppo</span>
                        <ul class='icon'>
                            <li><a href='#'><i class='fa fa-search'></i></a></li>
                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-6'>
                <div class='box'>
                    <img src='images/mobile phones/oppo a74 5g.jpg'>
                    <div class='box-content'>
                        <h3 class='title'>Oppo A74 5G</h3>
                        <span class='post'>Company: Oppo</span>
                        <ul class='icon'>
                            <li><a href='#'><i class='fa fa-search'></i></a></li>
                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br>",
            '2' => "    <section name='Cars'>
<div class='container'>
    <div class='row'>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/cars/porsche 911 gt3.jpg'>
            <div class='box-content'>
                <h3 class='title'>Porsche 911 GT3</h3>
                <span class='post'>Brand: Porsche</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/cars/Ferrari 458.webp'>
            <div class='box-content'>
                <h3 class='title'>Ferrari 458</h3>
                <span class='post'>Brand: Ferrari</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/cars/aventador.webp'>
            <div class='box-content'>
                <h3 class='title'>Lamborghini Aventador</h3>
                <span class='post'>Brand: Lamborghini</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/cars/bmw 3 series.webp'>
            <div class='box-content'>
                <h3 class='title'>BMW 3 Series</h3>
                <span class='post'>Brand: BMW</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/cars/aston martin vanquish.jpg'>
            <div class='box-content'>
                <h3 class='title'>Aston Martin Vanquish</h3>
                <span class='post'>Brand: Aston Martin</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/cars/alfa romeo giulia.avif'>
            <div class='box-content'>
                <h3 class='title'>Alfa Romeo Giulia</h3>
                <span class='post'>Brand: Alfa Romeo</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
</section><br><br><br>",
            '3' => "<section name='Laptops'>
<div class='container'>
    <div class='row'>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/laptops/lenovo ideapad 330.jpg'>
            <div class='box-content'>
                <h3 class='title'>Lenovo Ideapad 330</h3>
                <span class='post'>Brand: Lenovo</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/laptops/lenovo legion.webp'>
            <div class='box-content'>
                <h3 class='title'>Lenovo Legion</h3>
                <span class='post'>Brand: Lenovo</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/laptops/lenovo yoga c740.webp'>
            <div class='box-content'>
                <h3 class='title'>Lenovo Yoga C740</h3>
                <span class='post'>Brand: Lenovo</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/laptops/dell inspiron 3511.webp'>
            <div class='box-content'>
                <h3 class='title'>Dell Inspiron 3511</h3>
                <span class='post'>Brand: Dell</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/laptops/dell xps 13.jpg'>
            <div class='box-content'>
                <h3 class='title'>Dell XPS 13</h3>
                <span class='post'>Brand: Dell</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/laptops/dell latitude E6430s.jpg'>
            <div class='box-content'>
                <h3 class='title'>Dell Latitude E6430s</h3>
                <span class='post'>Brand: Dell</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
</section><br><br><br>",
            '4' => "<section name='Watches'>
<div class='container'>
    <div class='row'>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/watches/omega seamaster.jpg'>
            <div class='box-content'>
                <h3 class='title'>Seamaster</h3>
                <span class='post'>Company: Omega</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/watches/omega seamaster planet ocean.jpg'>
            <div class='box-content'>
                <h3 class='title'>Seamaster Planet Ocean</h3>
                <span class='post'>Company: Omega</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/watches/omega de ville.jpg'>
            <div class='box-content'>
                <h3 class='title'>De Ville</h3>
                <span class='post'>Company: Omega</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/watches/Trésor.png'>
            <div class='box-content'>
                <h3 class='title'>Trésor</h3>
                <span class='post'>Company: Omega</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/watches/IWC Aquatimer Chronograph.avif'>
            <div class='box-content'>
                <h3 class='title'>Aquatimer Chronograph</h3>
                <span class='post'>Company: IWC</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class='col-md-4 col-sm-6'>
        <div class='box'>
            <img src='images/watches/Aquatimer.avif'>
            <div class='box-content'>
                <h3 class='title'>Aquatimer</h3>
                <span class='post'>Company: IWC</span>
                <ul class='icon'>
                    <li><a href='#'><i class='fa fa-search'></i></a></li>
                    <li><a href='#'><i class='fa fa-link'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
</section><br><br><br>"
        ];

        if (isset($_POST['categories']) && is_array($_POST['categories'])) {
            echo "<h2 style='font-size: 35px;
            text-align: center;
            font-weight: bold;
            color: 000;'>Selected Categories:</h2>";

            foreach ($_POST['categories'] as $category) {

                $lowercaseCategory = strtolower($category);
                if (array_key_exists($lowercaseCategory, $Categories)) {

                    echo $Categories[$lowercaseCategory];
                }
            }
        }
    }

    displaySelectedCategories();
    ?>


    <div class="footer">
        <footer>
            <div class="row justify-content-center mb-0 pt-5 pb-0 row-2 px-3">
                <div class="col-12">
                    <div class="row row-2">
                        <div class="col-sm-3 text-md-center">
                            <h5><b> E-Store</b></h5>
                        </div>
                        <div class="col-sm-3 my-sm-0 mt-5">
                            <ul class="list-unstyled">
                                <li class="mt-0">Home</li>
                                <li>Shop</li>
                                <li>Cart</li>
                            </ul>
                        </div>

                        <div class="col-sm-3 my-sm-0 mt-5">
                            <ul class="list-unstyled">
                                <li class="mt-0">Products</li>
                                <li>Categories</li>
                                <li>My Account</li>
                            </ul>
                        </div>

                        <div class="col-sm-3 my-sm-0 mt-5">
                            <ul class="list-unstyled">
                                <li class="mt-0">About Us</li>
                                <li>Contact</li>
                                <li>Customer Service</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-0 pt-0 row-1 mb-0  px-sm-3 px-2">
                <div class="col-12">
                    <div class="row my-4 row-1 no-gutters">
                        <div class="col-sm-3 col-auto text-center"><small>&#9400; YNK Mades</small></div>
                        <div class="col-md-3 col-auto "></div>
                        <div class="col-md-3 col-auto"></div>
                        <div class="col  my-auto text-md-left  text-right "> <small> yk033127@gmail.com </small> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>