<?php
require_once "vendor/autoload.php";
use App\Classes\student;

    $id = $_GET['id'];
    $student = new Student();
    $result = $student->editStudentInfo($id);
    $student = mysqli_fetch_assoc($result);

    if(isset($_POST['btn'])){
        $student = new Student();
        $student->updateStudentInfo($id);
    }

?>

<table>
    <tr>
        <td><a href="view.php">Add student</a></td>
        <td><a href="viewStudent.php">View student</a></td>
    </tr>
</table>

<form action="" method="post">
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="<?php echo $student['name']; ?>"> </td>
        </tr>

        <tr>
            <td>email</td>
            <td><input type="text" name="email" value="<?php echo $student['email']; ?>"> </td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="phone" value="<?php echo $student['phone']; ?>"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"> </td>
        </tr>
    </table>
</form>