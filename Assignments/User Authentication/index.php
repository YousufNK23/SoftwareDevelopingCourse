<style>
    * { 
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .topnav {
        overflow: hidden;
        background-color: #332D2D;
        padding: 12px 22px;
    }

    .topnav a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    .topnav a:hover {
        background-color: #ddd;
        color: #ddd;
        color: #333;
    }

    .topnav a.active {
        background-color: #2196F3;
        color: white;
    }

    .topnav .login-container {
        float: right;
    }

    .topnav .login-container a {
        color: white;
        padding: 12px;
        margin-top: 8px;
        margin-right: 16px;
        background-color: #2196F3;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .topnav .login-container a:hover {
        background-color: #3699F9;
    }

    .topnav .login-container #logout {
        float: right;
        background: #DC4C64;
        display: none;
    }

    .topnav .login-container #logout:hover {
        background: #DC4D72;
    }

    .welcome-message {
        margin-top: 25px;
        text-align: center;
        color: #333;
        font-family: Arial, sans-serif;
    }

    .user-card {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      background-color: #f4f4f4;
      display: none;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      border-radius: 5px;
      overflow: hidden;
      width: 300px;
      max-width: 100%;
      text-align: center;
    }

    img {
      width: 100%;
      height: auto;
      border-radius: 5px 5px 0 0;
    }

    .container {
      padding: 20px;
    }

    h4 {
      margin: 10px 0;
    }

    p {
      margin: 0;
    }
</style>
<?php
session_start();

echo "<div class='topnav'>
<a class='active' href='#home'>Home</a>
<a href='#about'>About</a>
<a href='#contact'>Contact</a>
<div class='login-container'>
  <form action='index.php'>
    <a href='index.php?login=true' type='submit' name='login'>Login</a>
    <a href='index.php?logout=true' id='logout' type='submit' name='logout'>Logout</a>
  </form>
</div>
</div>";

echo "<div class='welcome-message'>

<h1>Welcome to our website!</h1>

</div>";

function login()
{
    echo "<style>
    .topnav .login-container #logout {
        display: block;
    }
    .user-card {
        display: flex;
    }
    .welcome-message{
        display: none;
    }
    </style>";
}

function logout()
{
    echo "<style>
    .topnav .login-container #logout {
        display: none;
    }
    .user-card {
        display: none;
    }
    .welcome-message{
        display: block;
    }
    </style>";
}

if (isset($_GET["login"])) {
    echo login();
    $_SESSION['username'] = "Abdullah";
    $_SESSION['pass'] = "login123";
    $_SESSION['fav'] = "Sketching";
}

if (isset($_SESSION["username"])) {
    echo "<section class='user-card'>
    <div class='card'>
    <img src='images/img_avatar.png' alt='Avatar' style='width:100%'>
    <div class='container'>
      <h4><b>" . $_SESSION["username"] . "</b></h4>
      <p>" . $_SESSION["fav"] . "</p>
    </div>
  </div>";
}

if (isset($_GET["logout"])) {
        echo logout();
        session_unset();
        session_destroy();
        echo "<script>alert('You have been logged out!')</script>";
    }
?>
