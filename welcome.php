<?php
include_once('dbconnect.php');

if(isset($_POST['submit'])) {
    $name = $_POST['ename'];
    $emp_desig = $_POST['edesig'];
    $emp_salary = $_POST['esalary'];

    $sql = "INSERT INTO emp (emp_name, desig, salary) VALUES ('$name', '$emp_desig', '$emp_salary')";

    if(mysqli_query($con, $sql)) {
        echo "<script>alert('New employee created successfully');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        input[type=text], select, input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit], input[type=reset] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover, input[type=reset]:hover {
            background-color: #45a049;
        }

        form {
            margin: 20px;
        }

        table {
            width: 50%;
            margin: 80px;
            padding: 80px;
        }

        a:link, a:visited {
            background-color: white;
            color: black;
            border: 2px solid green;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: green;
            color: white;
        }

        div {
            border-radius: 5px;
            background-color: #121212;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div>
        <a href='welcome.html'>Go to Home Page</a>
        <form action="welcome.php" method="post">
            <table>
                <tr><td colspan="2"><h1>New Employee Registration</h1></td></tr>
                <tr><td>Name:</td><td><input type="text" name="ename"></td></tr>
                <tr><td>Designation:</td><td><input type="text" name="edesig"></td></tr>
                <tr><td>Salary:</td><td><input type="text" name="esalary"></td></tr>
                <tr>
                    <td><input type="submit" name="submit" value="Submit"></td>
                    <td><input type="reset" name="reset" value="Reset" style="width: 50%;"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
