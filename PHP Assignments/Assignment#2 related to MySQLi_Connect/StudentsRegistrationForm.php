<?php
$server="localhost";
$username="root";
$password="";
$database= "SRF";
$insert= false;

$con= mysqli_connect($server, $username, $password, $database);

if(!$con){
    die("Connection Failed: ". mysqli_connect_error());
}

if(isset($_POST["fn"])){
    $firstnamevalue= $_POST["fn"];
    $lastnamevalue= $_POST["ln"];
    $dobvalue= $_POST["dob"];
    $emailvalue= $_POST["email"];
    $phonevalue= $_POST["mn"];
    $gendervalue= $_POST["gen"];
    $addressvalue= $_POST["address"];
    $cityvalue= $_POST["city"];
    $pincodevalue= $_POST["pc"];
    $statevalue= $_POST["state"];
    $countryvalue= $_POST["country"];
    $hobbiesvalue= $_POST["hobbies"];
    $boardX = $_POST["board_x"];
    $percentageX = $_POST["percentage_x"];
    $yearX = $_POST["year_x"];

    $boardXII = $_POST["board_xii"];
    $percentageXII = $_POST["percentage_xii"];
    $yearXII = $_POST["year_xii"];

    $boardGrad = $_POST["board_grad"];
    $percentageGrad = $_POST["percentage_grad"];
    $yearGrad = $_POST["year_grad"];

    $boardMasters = $_POST["board_masters"];
    $percentageMasters = $_POST["percentage_masters"];
    $yearMasters = $_POST["year_masters"];
    $coursesvalue= $_POST["caf"];

    $sql = "INSERT INTO SINFO (First_Name, Last_Name, Date_Of_Birth, Email_ID, Mobile_Number, Gender, Address, City, PIN_CODE, STATE, Country, Hobbies, Class_X_Board, Class_X_Percentage, Class_X_Year, Class_XII_Board, Class_XII_Percentage, Class_XII_Year, Graduation_Board, Graduation_Percentage, Graduation_Year, Masters_Board, Masters_Percentage, Masters_Year, CoursesAppliedFor) VALUES ('$firstnamevalue', '$lastnamevalue', '$dobvalue', '$emailvalue', '$phonevalue', '$gendervalue', '$addressvalue', '$cityvalue', '$pincodevalue', '$statevalue', '$countryvalue', '$hobbiesvalue', '$boardX', '$percentageX', '$yearX', '$boardXII', '$percentageXII', '$yearXII', '$boardGrad', '$percentageGrad', '$yearGrad', '$boardMasters', '$percentageMasters', '$yearMasters', '$coursesvalue')";

    // Execute the query
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo("<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Congratulations!</strong> You have been registered successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='top: 0;'></button>
  </div>");
    $insert= true;
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dcd7f1;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        .form-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 35px;
        background-color: #6c59cd; 
        border: 2px solid #333;
        border-radius: 10px;
        color: #fff; 
    }


        label {
            display: block;
            margin-bottom: 10px;
            color: #fff;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            width: 32%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #333;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #333;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #392c7c;
            color: #fff;
        }

        .hobbies-container {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .hobby-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .hobby-label {
            margin-left: 10px;
            color: #fff;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            background-color: #fff;
            color: #000;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="Student Registration Form.php" class="form-container" method="post">
        <h1>STUDENT REGISTRATION FORM</h1>

        <label for="fn"><b>First Name:</b></label>
        <input type="text" name="fn" id="fn" placeholder="First Name" required>

        <label for="ln"><b>Last Name:</b></label>
        <input type="text" name="ln" id="ln" placeholder="Last Name" required>

        <label for="dob"><b>Date Of Birth:</b></label>
        <input type="date" name="dob" id="dob">
        <br><br>

        <label for="email"><b>Email ID:</b></label>
        <input type="email" name="email" id="email" placeholder="Email" required>

        <label for="mn"><b>Mobile Number:</b></label>
        <input type="number" name="mn" id="mn" placeholder="Mobile Number" required>

        <label for="gen"><b>Gender:</b></label>
        <input type="radio" name="gen" id="male" value="Male" required> Male
        <input type="radio" name="gen" id="female" value="Female" required> Female

        <br><br>
        <label for="address"><b>Address:</b></label>
        <textarea name="address" id="address" rows="4" required></textarea>

        <label for="city"><b>City:</b></label>
        <input type="text" name="city" id="city" placeholder="City" required>

        <label for="pc"><b>PIN CODE:</b></label>
        <input type="text" name="pc" id="pc" placeholder="Pin Code" required>

        <label for="state"><b>State:</b></label>
        <input type="text" name="state" id="state" placeholder="State" required>

        <label for="country"><b>Country:</b></label>
        <input type="text" name="country" id="country" required>

        <div class="hobbies-container">
            <label for="hobbies"><b>Hobbies:</b></label>
            <div class="hobby-item">
                <input type="checkbox" name="hobbies" id="drawing" value="Drawing">
                <label for="drawing" class="hobby-label">Drawing</label>
            </div>
            <div class="hobby-item">
                <input type="checkbox" name="hobbies" id="singing" value="Singing">
                <label for="singing" class="hobby-label">Singing</label>
            </div>
            <div class="hobby-item">
                <input type="checkbox" name="hobbies" id="dancing" value="Dancing">
                <label for="dancing" class="hobby-label">Dancing</label>
            </div>
            <div class="hobby-item">
                <input type="checkbox" name="hobbies" id="sketching" value="Sketching">
                <label for="sketching" class="hobby-label">Sketching</label>
            </div>
            <div class="hobby-item">
                <input type="checkbox" name="hobbies" id="others" value="Others">
                <label for="others" class="hobby-label">Others</label>
            </div>
            <input type="text" name="other_hobbies" id="hobbies" placeholder="Other Hobbies">
        </div>

        <table>
            <thead>
                <tr>
                    <th>QUALIFICATION</th>
                    <th><small>SI.No.</small></th>
                    <th><small>EXAMINATION</small></th>
                    <th><b>BOARD</b></th>
                    <th><b>PERCENTAGE</b></th>
                    <th><b>YEAR OF PASSING</b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1.</td>
                    <td>Class X</td>
                    <td><input type="text" name="board_x" id="board_x" required></td>
                    <td><input type="text" name="percentage_x" id="percentage_x" required></td>
                    <td><input type="text" name="year_x" id="year_x" required></td>
                </tr>

                <tr>
                    <td></td>
                    <td>2.</td>
                    <td>Class XII</td>
                    <td><input type="text" name="board_xii" id="board_xii" required></td>
                    <td><input type="text" name="percentage_xii" id="percentage_xii" required></td>
                    <td><input type="text" name="year_xii" id="year_xii" required></td>
                </tr>

                <tr>
                    <td></td>
                    <td>3.</td>
                    <td>Graduation</td>
                    <td><input type="text" name="board_grad" id="board_grad" required></td>
                    <td><input type="text" name="percentage_grad" id="percentage_grad" required></td>
                    <td><input type="text" name="year_grad" id="year_grad" required></td>
                </tr>

                <tr>
                    <td></td>
                    <td>4.</td>
                    <td>Masters</td>
                    <td><input type="text" name="board_masters" id="board_masters" required></td>
                    <td><input type="text" name="percentage_masters" id="percentage_masters" required></td>
                    <td><input type="text" name="year_masters" id="year_masters" required></td>
                </tr>
            </tbody>
        </table>

        <br><br><br>
        <label for="caf"><b>COURSES APPLIED FOR:</b></label>
        <input type="radio" name="caf" id="bca" value="BCA" required> BCA
        <input type="radio" name="caf" id="bcom" value="B.Com" required> B.Com
        <input type="radio" name="caf" id="bsc" value="B.Sc" required> B.Sc
        <input type="radio" name="caf" id="ba" value="B.A" required> B.A

        <div class="btn-container">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
