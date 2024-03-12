<?php
include_once("dbconnect.php");

$name = $desig = $salary = "";

if(isset($_POST['submit'])) {
    if($_POST['name']) {
        $n = $_POST['name'];
        $sql = "SELECT * FROM emp WHERE emp_name='$n'";
        $data = mysqli_query($con, $sql);

        if(mysqli_num_rows($data) > 0) {
            $row = mysqli_fetch_assoc($data);
            $name = $row['emp_name'];
            $desig = $row['desig'];
            $salary = $row['salary'];
        } else {
            $name = "No Record Found";
        }
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
            background-color: #458049;
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
            background-color: #f2f2f2;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div>
        <form method="post">
            <table cellpadding="20px;">
                <tr>
<tr>
                    <td><input type="text" name="name" placeholder="Enter employee name to search"></td>
                    <td><input type="submit" name="submit"></td>
                </tr>
                <tr>
                    <td>Employee Name:</td>
                    <td><?php echo $name?></td>
                </tr>
                <tr>
                    <td>Designation:</td>
                    <td><?php echo $desig ?></td>
                </tr>
                <tr>
                    <td>Salary:</td>
                    <td><?php echo $salary ?></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
