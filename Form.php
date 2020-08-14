<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Form</title>
</head>
<body>
<style>
    h3 {
        color: red;
    }
</style>
<h3>Employee Form</h3>
<form method="POST">
    <table>
        <tr>
            <td>
                <label for="family-name">Family name: </label>
            </td>
            <td>
                <input type="text" id="family-name" name="family-name" placeholder="Input family name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="name">Name: </label>
            </td>
            <td>
                <input type="text" id="name" name="name" placeholder="Input name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="birthday">Birthday: </label>
            </td>
            <td>
                <input type="text" id="birthday" name="birthday" placeholder="Input birthday">
            </td>
        </tr>
        <tr>
            <td>
                <label for="address">Address: </label>
            </td>
            <td>
                <input type="text" id="address" name="address" placeholder="Input address">
            </td>
        </tr>
        <tr>
            <td>
                <label for="position">Position: </label>
            </td>
            <td>
                <input type="text" id="position" name="position" placeholder="Input position">
            </td>
        </tr>
        <tr style="text-align: center">
            <td colspan="2">
                <input type="submit" id="submit">
            </td>
        </tr>
    </table>
</form>
<?php
include_once 'Models/Employee.php';
include_once 'Services/EmployeeManager.php';

use Models\Employee;
use Service\EmployeeManager;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $family_Name = $_POST['family-name'];
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];
    $position = $_POST['position'];

    $employee = new Employee($family_Name, $name, $birthday, $address, $position);

    $employeeManager = new EmployeeManager();
    $employeeManager->getEmployees();
    $employeeManager->add($employee);
    echo 'Save successed!';
    header('location:index.php');
}
?>
</body>
</html>
