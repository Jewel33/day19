<?php
require_once "vendor/autoload.php";
use App\Classes\student;
	
	$msg = '';
	$id = $_GET['id'];
	$student = new Student();
    $msg = $student->deleteStudent($id);

    echo $msg;
?>

<table>
    <tr>
        <td><a href="view.php">Add student</a></td>
        <td><a href="viewStudent.php">View student</a></td>
    </tr>
</table>