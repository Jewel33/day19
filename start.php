<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['btn'])){
        require_once './Addition.php';
        $classified = new Addition();
        $result = $classified->filter($_POST);
    }
   
}
    ?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="firstNumber" value=""></td>
        </tr>
        <tr>
            <td>Second Number</td>
            <td><input type="text" name="secondNumber" value=""></td>
        </tr>
      	<tr>
            <td>Third Number</td>
            <td><input type="text" name="thirdNumber" value=""></td>
        </tr>
        <tr>
            <td>Forth Number</td>
            <td><input type="text" name="forthNumber" value=""></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="lastNumber" value=""></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit" name="btn">
            </td>

        </tr>

    </table>
</form>

<table border="1" cellpadding="3" width="50">
	<tr>
		<th>1st</th>
		<th>2nd</th>
		<th>3rd</th>
		<th>4th</th>
		<th>5th</th>
		<th>Result</th>
	</tr>
	<tr>
		<td><?php echo $first; ?></td>
		<td><?php echo $_POST['secondNumber']; ?></td>
		<td><?php echo $_POST['thirdNumber']; ?></td>
		<td><?php echo $_POST['forthNumber']; ?></td>
		<td><?php echo $_POST['lastNumber']; ?></td>
		<td><?php echo $result; ?></td>
	</tr>
</table>