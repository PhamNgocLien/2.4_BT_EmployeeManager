<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Employee List</title>
</head>
<style>
    table {
        border-collapse: collapse;
    }
    th, td {
        width: 300px;
        height: 50px;
        border-bottom: 1px solid grey;
    }
</style>
<body>
<?php
include_once 'Models/Employee.php';
include_once 'Services/EmployeeManager.php';

use Models\Employee;
use Service\EmployeeManager;
?>
<table>
    <caption><h3 style="color: darkblue">Employee list</h3></caption>
    <a href='http://localhost/2.4_BT_EmployeeManager/Form.php'>Back</a>
    <tr style="text-align: left">
        <th>Family Name</th>
        <th>Name</th>
        <th>Birthday</th>
        <th>Address</th>
        <th>Position</th>
    </tr>
    <?php
    $employeeManager = new EmployeeManager();
    $employees = $employeeManager->getEmployees();

    foreach ($employees as $key => $value):
        ?>
        <tr>
            <td><?php echo $value['family_name'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['birthday'] ?></td>
            <td><?php echo $value['address'] ?></td>
            <td><?php echo $value['position'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>