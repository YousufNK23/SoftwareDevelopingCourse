<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "SRF";
$insert = false;

$con = mysqli_connect($server, $username, $password, $database);

if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

if (isset($_POST["First_Name"])) {
    $FNValue = $_POST["First_Name"];
    $LNValue = $_POST["Last_Name"];
    $BDValue = $_POST["Birthday_Day"];
    $BMValue = $_POST["Birthday_Month"];
    $BYValue = $_POST["Birthday_Year"];
    $EIValue = $_POST["Email_ID"];
    $MNValue = $_POST["Mobile_Number"];
    $GENValue = $_POST["Gender"];
    $ADValue = $_POST["Address"];
    $CTValue = $_POST["City"];
    $PCValue = $_POST["Pin_Code"];
    $SValue = $_POST["State"];
    $CValue = $_POST["Country"];
    $HDWValue = isset($_POST["Hobby_Drawing"]) ? $_POST["Hobby_Drawing"] : "-";
    $HSValue = isset($_POST["Hobby_Singing"]) ? $_POST["Hobby_Singing"] : "-";
    $HDValue = isset($_POST["Hobby_Dancing"]) ? $_POST["Hobby_Dancing"] : "-";
    $HCValue = isset($_POST["Hobby_Cooking"]) ? $_POST["Hobby_Cooking"] : "-";
    $HOValue = $_POST["Other_Hobby"];
    $CXBValue = $_POST["ClassX_Board"];
    $CXPValue = $_POST["ClassX_Percentage"];
    $CXYPValue = $_POST["ClassX_YP"];
    $CXIIBValue = $_POST["ClassXII_Board"];
    $CXIIPValue = $_POST["ClassXII_Percentage"];
    $CXIIYPValue = $_POST["ClassXII_YP"];
    $GBValue = $_POST["Graduation_Board"];
    $GPValue = $_POST["Graduation_Percentage"];
    $GYPValue = $_POST["Graduation_YP"];
    $MBValue = $_POST["Masters_Board"];
    $MPValue = $_POST["Masters_Percentage"];
    $MYPValue = $_POST["Masters_YP"];
    $BCAValue = isset($_POST["BCACourse"]) ? $_POST["BCACourse"] : "-";
    $BCOMValue = isset($_POST["B_ComCourse"]) ? $_POST["B_ComCourse"] : "-";
    $BSCValue = isset($_POST["B_SCCourse"]) ? $_POST["B_SCCourse"] : "-";
    $BAValue = isset($_POST["B_ACourse"]) ? $_POST["B_ACourse"] : "-";

    $sql = "INSERT INTO S_INFO (First_Name, Last_Name, Birth_Day, Birth_Month, Birth_Year, Email_ID, Mobile_Number, Gender, Address, City, PIN_CODE, STATE, Country, Drawing_Hobby, Singing_Hobby, Dancing_Hobby, Cooking_Hobby, Other_Hobby, Class_X_Board, Class_X_Percentage, Class_X_Year, Class_XII_Board, Class_XII_Percentage, Class_XII_Year, Graduation_Board, Graduation_Percentage, Graduation_Year, Masters_Board, Masters_Percentage, Masters_Year, BCA, B_Com, B_SC, B_A) 
            VALUES ('$FNValue', '$LNValue', '$BDValue', '$BMValue', '$BYValue', '$EIValue', '$MNValue', '$GENValue', '$ADValue', '$CTValue', '$PCValue', '$SValue', '$CValue', '$HDWValue', '$HSValue', '$HDValue', '$HCValue', '$HOValue', '$CXBValue', '$CXPValue', '$CXYPValue', '$CXIIBValue', '$CXIIPValue', '$CXIIYPValue', '$GBValue', '$GPValue', '$GYPValue', '$MBValue', '$MPValue', '$MYPValue', '$BCAValue', '$BCOMValue', '$BSCValue', '$BAValue')";

    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Congratulations!</strong> You have been registered successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' style='top: 0;'></button>
      </div>";
        $insert = true;
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
        h3 {
            font-family: Calibri;
            font-size: 25pt;
            font-style: normal;
            font-weight: bold;
            color: SlateBlue;
            text-align: center;
            text-decoration: underline
        }

        table {
            font-family: Calibri;
            color: white;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;
            background-color: SlateBlue;
            border-collapse: collapse;
            border: 2px solid navy
        }

        table.inner {
            border: 0px
        }
    </style>
</head>

<body>
    <h3>STUDENT REGISTRATION FORM</h3>

<form action="Student Registration Form.php" method="post">
    <table align="center" cellpadding="10">

        <!----- First Name ---------------------------------------------------------->
        <tr>
            <td>FIRST NAME</td>
            <td><input type="text" name="First_Name" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Last Name ---------------------------------------------------------->
        <tr>
            <td>LAST NAME</td>
            <td><input type="text" name="Last_Name" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
            <td>DATE OF BIRTH</td>

            <td>
                <select name="Birthday_Day" id="Birthday_Day">
                    <option value="-1">Day:</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>

                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>

                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>

                    <option value="31">31</option>
                </select>

                <select id="Birthday_Month" name="Birthday_Month">
                    <option value="-1">Month:</option>
                    <option value="January">Jan</option>
                    <option value="February">Feb</option>
                    <option value="March">Mar</option>
                    <option value="April">Apr</option>
                    <option value="May">May</option>
                    <option value="June">Jun</option>
                    <option value="July">Jul</option>
                    <option value="August">Aug</option>
                    <option value="September">Sep</option>
                    <option value="October">Oct</option>
                    <option value="November">Nov</option>
                    <option value="December">Dec</option>
                </select>

                <select name="Birthday_Year" id="Birthday_Year">

                    <option value="-1">Year:</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>

                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>

                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                </select>
            </td>
        </tr>

        <!----- Email Id ---------------------------------------------------------->
        <tr>
            <td>EMAIL ID</td>
            <td><input type="text" name="Email_ID" maxlength="100" /></td>
        </tr>

        <!----- Mobile Number ---------------------------------------------------------->
        <tr>
            <td>MOBILE NUMBER</td>
            <td>
                <input type="text" name="Mobile_Number" maxlength="10" />
                (10 digit number)
            </td>
        </tr>

        <!----- Gender ----------------------------------------------------------->
        <tr>
            <td>GENDER</td>
            <td>
                Male <input type="radio" name="Gender" value="Male" />
                Female <input type="radio" name="Gender" value="Female" />
            </td>
        </tr>

        <!----- Address ---------------------------------------------------------->
        <tr>
            <td>ADDRESS <br /><br /><br /></td>
            <td><textarea name="Address" rows="4" cols="30"></textarea></td>
        </tr>

        <!----- City ---------------------------------------------------------->
        <tr>
            <td>CITY</td>
            <td><input type="text" name="City" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Pin Code ---------------------------------------------------------->
        <tr>
            <td>PIN CODE</td>
            <td><input type="text" name="Pin_Code" maxlength="6" />
                (6 digit number)
            </td>
        </tr>

        <!----- State ---------------------------------------------------------->
        <tr>
            <td>STATE</td>
            <td><input type="text" name="State" maxlength="30" />
                (max 30 characters a-z and A-Z)
            </td>
        </tr>

        <!----- Country ---------------------------------------------------------->
        <tr>
            <td>COUNTRY</td>
            <td><input type="text" name="Country" /></td>
        </tr>

        <!----- Hobbies ---------------------------------------------------------->

        <tr>
            <td>HOBBIES <br /><br /><br /></td>

            <td>
                Drawing
                <input type="checkbox" name="Hobby_Drawing" value="Drawing" />
                Singing
                <input type="checkbox" name="Hobby_Singing" value="Singing" />
                Dancing
                <input type="checkbox" name="Hobby_Dancing" value="Dancing" />
                Cooking
                <input type="checkbox" name="Hobby_Cooking" value="Cooking" />
                <br />
                Others
                <input type="checkbox" value="Other">
                <input type="text" name="Other_Hobby" maxlength="30" />
            </td>
        </tr>

        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>

            <td>
                <table>

                    <tr>
                        <td align="center"><b>Sl.No.</b></td>
                        <td align="center"><b>Examination</b></td>
                        <td align="center"><b>Board</b></td>
                        <td align="center"><b>Percentage</b></td>
                        <td align="center"><b>Year of Passing</b></td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>Class X</td>
                        <td><input type="text" name="ClassX_Board" maxlength="30" /></td>
                        <td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
                        <td><input type="text" name="ClassX_YP" maxlength="30" /></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Class XII</td>
                        <td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
                        <td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
                        <td><input type="text" name="ClassXII_YP" maxlength="30" /></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Graduation</td>
                        <td><input type="text" name="Graduation_Board" maxlength="30" /></td>
                        <td><input type="text" name="Graduation_Percentage" maxlength="30" /></td>
                        <td><input type="text" name="Graduation_YP" maxlength="30" /></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Masters</td>
                        <td><input type="text" name="Masters_Board" maxlength="30" /></td>
                        <td><input type="text" name="Masters_Percentage" maxlength="30" /></td>
                        <td><input type="text" name="Masters_YP" maxlength="30" /></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td></td>
                        <td align="center">(10 char max)</td>
                        <td align="center">(upto 2 decimal)</td>
                    </tr>
                </table>

            </td>
        </tr>

        <!----- Course ---------------------------------------------------------->
        <tr>
            <td><label>COURSES<br />APPLIED FOR</label></td>
            <td>
                BCA
                <input type="radio" name="BCACourse" value="BCA">
                B.Com
                <input type="radio" name="B_ComCourse" value="B.Com">
                B.Sc
                <input type="radio" name="B_SCCourse" value="B.Sc">
                B.A
                <input type="radio" name="B_ACourse" value="B.A">
            </td>
        </tr>

        <!----- Submit and Reset ------------------------------------------------->
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
