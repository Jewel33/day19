<?php
require_once "vendor/autoload.php";
use App\Classes\student;

if(isset($_POST['btn'])){
    $student = new Student();
    $student->saveStudentInfo($_POST);
}
?>
<form action="" method="post">
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value=""> </td>
        </tr>
        <tr>
            <td>password</td>
            <td><input type="text" name="password" value=""> </td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" value=""> </td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="phone" value=""> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"> </td>
        </tr>
    </table>
</form>