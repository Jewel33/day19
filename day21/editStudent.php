<?php
require_once "vendor/autoload.php";
use App\Classes\student;

    $msg = '';
    $id = $_GET['id'];
    if(isset($_POST['btn'])){
        $student = new Student();
        $msg = $student->updateStudent($id);
    }

    
    $student = new Student();
    $result = $student->editStudentInfo($id);
    $student = mysqli_fetch_assoc($result);

   
?>

<table>
    <tr>
        <td><a href="view.php">Add student</a></td>
        <td><a href="viewStudent.php">View student</a></td>
    </tr>
</table>

<form action="" method="post">
    <?php echo $msg; ?>
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
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>