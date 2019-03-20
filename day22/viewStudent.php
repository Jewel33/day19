<?php
require_once "vendor/autoload.php";
use App\Classes\Student;

$student = new Student();
$result = $student->viewStudentInfo();

if(isset($_GET['status'])){
    $id = $_GET['id'];
    $student = new Student();
    $student->deleteStudentInfo($id);
}

if(isset($_POST['btn'])){
    $student = new Student();
    $result = $student->searchStudentInfo();
}



?>

<table>
    <tr>
        <td><a href="view.php">Add student</a></td>
        <td><a href="viewStudent.php">View student</a></td>
    </tr>
</table>

    <hr>
    <form action="" method="post">
        <table>
            <tr>
                <td>Search:</td>
                <td><input type="text" name="search_text"></td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="search"></td>
            </tr>

        </table>
    </form>

    <table border="1" width="500">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

            <?php /*if(mysqli_num_rows($result) > 0){*/
                while ($std = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $std['id']; ?></td>
                        <td><?php echo $std['name']; ?></td>
                        <td><?php echo $std['email']; ?></td>
                        <td><?php echo $std['phone']; ?></td>
                        <td>
                            <a href="editStudent.php?id=<?php echo $std['id']; ?>">Edit ||</a>
                            <a href="?status=delete&id=<?php echo $std['id']; ?>"
                                onclick ="return confirm('are u sure to delete');">Delete</a>
                        </td>
                    </tr>
            <?php
            }?>

    </table>
