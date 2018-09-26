<form action="proses.php" method="POST">
	<center>
	<table  border="2" cellpadding="2" bgcolor="skyblue">
		<tr>
			<td>Username</td>
			<td>: <input type="text" name="user[]"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type="password" name="pass[]"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Log In">
			</td>
		</tr>
	</table>
</form>
</center>
<?php
if (isset($_POST['submit'])) {
	$user 	= $_POST['user'];
	$pass 	= $_POST['pass'];
}
?>

