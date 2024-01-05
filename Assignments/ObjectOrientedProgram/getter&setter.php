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

    public function setzameer($name, $zameer)
    {
      $this->name = $name;
      $this->zameer = $zameer;
    }

    public function getzameer()
    {
      echo "<div class='container'>";
      echo "<h2>" . $this->name . "</h2>";
      echo "<p>" . $this->zameer . "</p>";
      echo "</div>";
    }
  }

  $zameer1 = new Zamayer();
  $zameer1->setzameer("مرفوع متصل", "ضربت, ضربنا, ضربتَ, ضربتما, ضربتم, ضربتِ, ضربتما, ضربتنّ, ضرب, ضربا, ضربوا, ضربت, ضربتا, ضربن");
  $zameer1->getzameer();

  $zameer2 = new Zamayer();
  $zameer2->setzameer("مرفوع منفصل", "أنا، نحن، أنتَ، أنتما، أنتم، أنتِ، أنتما، أنتنّ،ھو، ھما، ھم، ھی، ھما، ھنّ");
  $zameer2->getzameer();

  $zameer3 = new Zamayer();
  $zameer3->setzameer("منصوب متصل", "ضربني، ضربنا، ضربك، ضربكما، ضربكم، ضربك، ضربكما، ضربكن، ضربه، ضربهما، ضربهم، ضربها، ضربهما، ضربهن");
  $zameer3->getzameer();

  $zameer4 = new Zamayer();
  $zameer4->setzameer("منصوب منفصل", "اَیّای، اَیّانَا، اَیّاك، اَیّاكُما، اَیّاكُم، اَیّاك، اَیّاكُما، اَیّاكُن، اَیّاه، اَیّاهُما، اَیّاهُم، اَیّاها، اَیّاهُما، اَیّاهُن");
  $zameer4->getzameer();

  $zameer5 = new Zamayer();
  $zameer5->setzameer("مجرور متصل", "لِي، لَنا، لَك، لَكُما، لَكُم، لَك، لَكُما، لَكُن، لَهُ، لَهُما، لَهُم، لَها، لَهُما، لَهُن");
  $zameer5->getzameer();

  echo "<br><br><br>";
  echo "<div class='container'>";
  echo "<h1>کتب</h1>";
  echo "<hr>";
  echo "<div>";
  class Books
  {
    public $name;
    public $price;

    public function setbook($name, $price)
    {
      $this->name = $name;
      $this->price = $price;
    }

    public function getbook()
    {
      echo "<div class='container'>";
      echo "<h2>" . $this->name . "</h2>";
      echo "<p>" . $this->price . "</p>";
      echo "</div>";
    }
  }

  $book1 = new Books();
  $book1->setbook("سنن ابي داؤد بشرىٰ", "Rs 5,810");
  $book1->getbook();

  $book2 = new Books();
  $book2->setbook("صحيح الإمام البخاري", "Rs 16,674");
  $book2->getbook();

  $book3 = new Books();
  $book3->setbook("تسہیل النحو", "Rs 110");
  $book3->getbook();

  $book4 = new Books();
  $book4->setbook("تسہیل المنطق", "Rs 175");
  $book4->getbook();




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

      public function setphone($name, $company, $price, $memory, $battery, $processor, $display) 
      {
        $this->name=$name;
        $this->company=$company;
        $this->price=$price;
        $this->memory=$memory;
        $this->battery=$battery;
        $this->processor=$processor;
        $this->display=$display;
      }

      public function getphone()
      {
        echo "<div class='container'>";
        echo "<h2>Name:</h2><p> " . $this->name . "</p>";
        echo "<h2>Company:</h2><p> " . $this->company . "</p>";
        echo "<h2>Price:</h2><p> " . $this->price . "</p>";
        echo "<h2>Memory:</h2><p> " . $this->memory . "</p>";
        echo "<h2>Processor:</h2><p> " . $this->processor . "</p>";
        echo "<h2>Display:</h2><p> " . $this->display . "</p>";
        echo "</div>";
      }
    }

    $phone1 = new Phones();
    $phone1->setphone("iPhone 13 Pro","Apple Inc.","$999 (starting)","RAM: 6 GB, Storage: 128 GB, 256 GB, 512 GB","3095 mAh","Apple A15 Bionic","6.1 inches, 2532 x 1170 pixels");
    $phone1->getphone();


    $phone2 = new Phones();
    $phone2->setphone("Samsung Galaxy S21","Samsung","$799 (starting)","RAM: 8 GB, Storage: 128 GB, 256 GB","4000 mAh","Exynos 2100/Snapdragon 888","6.2 inches, 2400 x 1080 pixels");
    $phone2->getphone();


    $phone3 = new Phones();
    $phone3->setphone("OnePlus 9","OnePlus","$729 (starting)","RAM: 8 GB, 12 GB, Storage: 128 GB, 256 GB","4500 mAh","Qualcomm Snapdragon 888","6.55 inches, 2400 x 1080 pixels");
    $phone3->getphone();


    $phone4 = new Phones();
    $phone4->setphone("Google Pixel 6","Google","$799 (estimated)","RAM: 8 GB, Storage: 128 GB, 256 GB","4600 mAh","Google Tensor","6.4 inches, 2340 x 1080 pixels");
    $phone4->getphone();


    $phone5 = new Phones();
    $phone5->setphone("Xiaomi Redmi Note 10","Xiaomi","$199 (starting)","RAM: 4 GB, 6 GB, Storage: 64 GB, 128 GB","5000 mAh","Qualcomm Snapdragon 678","6.43 inches, 2400 x 1080 pixels");
    $phone5->getphone();




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

      public function setwatch($name, $brand, $price, $material, $movement, $waterResistance, $displayType) 
      {
        $this->name=$name;
        $this->brand=$brand;
        $this->price=$price;
        $this->material=$material;
        $this->movement=$movement;
        $this->waterResistance=$waterResistance;
        $this->displayType=$displayType;
      }

      public function getwatch() 
      {
        echo "<div class='container'>";
        echo "<h2>Name:</h2><p> " . $this->name . "</p>";
        echo "<h2>Brand:</h2><p> " . $this->brand . "</p>";
        echo "<h2>Price:</h2><p> " . $this->price . "</p>";
        echo "<h2>Material:</h2><p> " . $this->material . "</p>";
        echo "<h2>Movement:</h2><p> " . $this->movement . "</p>";
        echo "<h2>Water Resistance:</h2><p> " . $this->waterResistance . "</p>";
        echo "<h2>Display Type:</h2><p> " . $this->displayType . "</p>";
        echo "</div>";
      }
  }

  $watch1 = new Watches();
  $watch1->setwatch("Casio G-Shock","Casio","$150","Resin","Quartz","200 meters","Digital");
  $watch1->getwatch();

  $watch2 = new Watches();
  $watch2->setwatch("Fossil Gen 5","Fossil","$295","Stainless Steel","Smartwatch","30 meters","Touchscreen");
  $watch2->getwatch();

  $watch3 = new Watches();
  $watch3->setwatch("Seiko 5","Seiko","$100","Stainless Steel","Automatic","30 meters","Analog");
  $watch3->getwatch();





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

    public function setlaptop($model, $brand, $price, $processor, $memory, $storage, $displaySize) 
    {
      $this->model=$model;
      $this->brand=$brand;
      $this->price=$price;
      $this->processor=$processor;
      $this->memory=$memory;
      $this->storage=$storage;
      $this->displaySize=$displaySize;
    }

    public function getlaptop()
    {
      echo "<div class='container'>";
      echo "<h2>Model:</h2><p> " . $this->model . "</p>";
      echo "<h2>Brand:</h2><p> " . $this->brand . "</p>";
      echo "<h2>Price:</h2><p> " . $this->price . "</p>";
      echo "<h2>Processor:</h2><p> " . $this->processor . "</p>";
      echo "<h2>Memory:</h2><p> " . $this->memory . "</p>";
      echo "<h2>Storage:</h2><p> " . $this->storage . "</p>";
      echo "<h2>Display Size:</h2><p> " . $this->displaySize . "</p>";
      echo "</div>";
    }
  }

  $laptop1 = new Laptops();
  $laptop1->setlaptop("Dell XPS 13","Dell","$1,299","Intel Core i5","8 GB","256 GB SSD","13.3 inches");
  $laptop1->getlaptop();

  $laptop2 = new Laptops();
  $laptop2->setlaptop("HP Spectre x360","HP","$1,499","Intel Core i7","16 GB","512 GB SSD","13.3 inches");
  $laptop2->getlaptop();

  $laptop3 = new Laptops();
  $laptop3->setlaptop("MacBook Air","Apple","$999","Apple M1","8 GB","256 GB SSD","13.3 inches");
  $laptop3->getlaptop();


  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>