<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Arabic:wght@600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap');

  .container {
    font-family: 'Noto Sans Arabic', sans-serif;
    font-family: 'Poppins', sans-serif;
    margin-top: 45px;
    text-align: center;
  }
</style>

<body>

  <?php
  echo "<div class='container'>";
  echo "<h1>ضمائر</h1>";
  echo "<hr>";
  echo "<div>";
  class Zamayer
  {
    public $name;
    public $zameer;

    public function __construct($name, $zameer)
    {
      $this->name = $name;
      $this->zameer = $zameer;

      echo "<div class='container'>";
      echo "<h2>" . $name . "</h2>";
      echo "<p>" . $zameer . "</p>";
      echo "</div>";
    }
  }

  $zameer1 = new Zamayer("مرفوع متصل", "ضربت, ضربنا, ضربتَ, ضربتما, ضربتم, ضربتِ, ضربتما, ضربتنّ, ضرب, ضربا, ضربوا, ضربت, ضربتا, ضربن");
  $zameer2 = new Zamayer("مرفوع منفصل", "أنا، نحن، أنتَ، أنتما، أنتم، أنتِ، أنتما، أنتنّ،ھو، ھما، ھم، ھی، ھما، ھنّ");
  $zameer3 = new Zamayer("منصوب متصل", "ضربني، ضربنا، ضربك، ضربكما، ضربكم، ضربك، ضربكما، ضربكن، ضربه، ضربهما، ضربهم، ضربها، ضربهما، ضربهن");
  $zameer4 = new Zamayer("منصوب منفصل", "اَیّای، اَیّانَا، اَیّاك، اَیّاكُما، اَیّاكُم، اَیّاك، اَیّاكُما، اَیّاكُن، اَیّاه، اَیّاهُما، اَیّاهُم، اَیّاها، اَیّاهُما، اَیّاهُن");
  $zameer5 = new Zamayer("مجرور متصل", "لِي، لَنا، لَك، لَكُما، لَكُم، لَك، لَكُما، لَكُن، لَهُ، لَهُما، لَهُم، لَها، لَهُما، لَهُن");

  echo "<br><br><br>";
  echo "<div class='container'>";
  echo "<h1>کتب</h1>";
  echo "<hr>";
  echo "<div>";
  class Books
  {
    public $name;
    public $price;

    public function __construct($name, $price)
    {
      $this->name = $name;
      $this->price = $price;

      echo "<div class='container'>";
      echo "<h2>" . $name . "</h2>";
      echo "<p>" . $price . "</p>";
      echo "</div>";
    }
  }

  $book1 = new Books("سنن ابي داؤد بشرىٰ", "Rs 5,810");
  $book2 = new Books("صحيح الإمام البخاري", "Rs 16,674");
  $book3 = new Books("تسہیل النحو", "Rs 110");
  $book4 = new Books("تسہیل المنطق", "Rs 175");

  echo "<br><br><br>";
  echo "<div class='container'>";
  echo "<h1>Mobile Phones</h1>";
  echo "<hr>";
  echo "<div>";
  class Phones{
    public $name;
    public $company;
    public $price;
    public $memory;
    public $battery;
    public $processor;
    public $display;

    public function __construct($name, $company, $price, $memory, $battery, $processor, $display) 
    {
      $this->name=$name;
      $this->company=$company;
      $this->price=$price;
      $this->memory=$memory;
      $this->battery=$battery;
      $this->processor=$processor;
      $this->display=$display;

      echo "<div class='container'>";
      echo "<h2>Name:</h2><p> " . $name . "</p>";
      echo "<h2>Company:</h2><p> " . $company . "</p>";
      echo "<h2>Price:</h2><p> " . $price . "</p>";
      echo "<h2>Memory:</h2><p> " . $memory . "</p>";
      echo "<h2>Processor:</h2><p> " . $processor . "</p>";
      echo "<h2>Display:</h2><p> " . $display . "</p>";
      echo "</div>";
    }
  }

  $phone1 = new Phones("iPhone 13 Pro","Apple Inc.","$999 (starting)","RAM: 6 GB, Storage: 128 GB, 256 GB, 512 GB","3095 mAh","Apple A15 Bionic","6.1 inches, 2532 x 1170 pixels");
  $phone2 = new Phones("Samsung Galaxy S21","Samsung","$799 (starting)","RAM: 8 GB, Storage: 128 GB, 256 GB","4000 mAh","Exynos 2100/Snapdragon 888","6.2 inches, 2400 x 1080 pixels");
  $phone3 = new Phones("OnePlus 9","OnePlus","$729 (starting)","RAM: 8 GB, 12 GB, Storage: 128 GB, 256 GB","4500 mAh","Qualcomm Snapdragon 888","6.55 inches, 2400 x 1080 pixels");
  $phone4 = new Phones("Google Pixel 6","Google","$799 (estimated)","RAM: 8 GB, Storage: 128 GB, 256 GB","4600 mAh","Google Tensor","6.4 inches, 2340 x 1080 pixels");
  $phone5 = new Phones("Xiaomi Redmi Note 10","Xiaomi","$199 (starting)","RAM: 4 GB, 6 GB, Storage: 64 GB, 128 GB","5000 mAh","Qualcomm Snapdragon 678","6.43 inches, 2400 x 1080 pixels");
  

  echo "<br><br><br>";
  echo "<div class='container'>";
  echo "<h1>Watches</h1>";
  echo "<hr>";
  echo "<div>";
  class Watches{
    public $name;
    public $brand;
    public $price;
    public $material;
    public $movement;
    public $waterResistance;
    public $displayType;

    public function __construct($name, $brand, $price, $material, $movement, $waterResistance, $displayType) 
    {
      $this->name=$name;
      $this->brand=$brand;
      $this->price=$price;
      $this->material=$material;
      $this->movement=$movement;
      $this->waterResistance=$waterResistance;
      $this->displayType=$displayType;

      echo "<div class='container'>";
      echo "<h2>Name:</h2><p> " . $name . "</p>";
      echo "<h2>Brand:</h2><p> " . $brand . "</p>";
      echo "<h2>Price:</h2><p> " . $price . "</p>";
      echo "<h2>Material:</h2><p> " . $material . "</p>";
      echo "<h2>Movement:</h2><p> " . $movement . "</p>";
      echo "<h2>Water Resistance:</h2><p> " . $waterResistance . "</p>";
      echo "<h2>Display Type:</h2><p> " . $displayType . "</p>";
      echo "</div>";
    }
}

$watch1 = new Watches("Casio G-Shock","Casio","$150","Resin","Quartz","200 meters","Digital");
$watch2 = new Watches("Fossil Gen 5","Fossil","$295","Stainless Steel","Smartwatch","30 meters","Touchscreen");
$watch3 = new Watches("Seiko 5","Seiko","$100","Stainless Steel","Automatic","30 meters","Analog");


echo "<br><br><br>";
echo "<div class='container'>";
echo "<h1>Laptops</h1>";
echo "<hr>";
echo "<div>";
class Laptops{
  public $model;
  public $brand;
  public $price;
  public $processor;
  public $memory;
  public $storage;
  public $displaySize;

  public function __construct($model, $brand, $price, $processor, $memory, $storage, $displaySize) 
  {
    $this->model=$model;
    $this->brand=$brand;
    $this->price=$price;
    $this->processor=$processor;
    $this->memory=$memory;
    $this->storage=$storage;
    $this->displaySize=$displaySize;

    echo "<div class='container'>";
    echo "<h2>Model:</h2><p> " . $model . "</p>";
    echo "<h2>Brand:</h2><p> " . $brand . "</p>";
    echo "<h2>Price:</h2><p> " . $price . "</p>";
    echo "<h2>Processor:</h2><p> " . $processor . "</p>";
    echo "<h2>Memory:</h2><p> " . $memory . "</p>";
    echo "<h2>Storage:</h2><p> " . $storage . "</p>";
    echo "<h2>Display Size:</h2><p> " . $displaySize . "</p>";
    echo "</div>";
  }
}

$laptop1 = new Laptops("Dell XPS 13","Dell","$1,299","Intel Core i5","8 GB","256 GB SSD","13.3 inches");
$laptop2 = new Laptops("HP Spectre x360","HP","$1,499","Intel Core i7","16 GB","512 GB SSD","13.3 inches");
$laptop3 = new Laptops("MacBook Air","Apple","$999","Apple M1","8 GB","256 GB SSD","13.3 inches");


  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>