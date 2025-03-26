<?php
include "phpsql.php";
$id = $_GET['id'];
$query = "select * from registration where id = '$id'";

$res = mysqli_query($con,$query);

$row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Update Form </title>
	</head>
	<body>
		<form action = "update_user.php" method = "POST">
			id = <input type = 'text' name = 'id' value = "<?php echo htmlentities(strtoupper($row['id']));?>"><br><br>
			name = <input type = 'name' name = 'name' value = "<?php echo $row['name'];?>"><br><br>
			phone = <input type = 'phone' name = 'phone' value = "<?php echo $row['phone'];?>"><br><br>
			email = <input type = 'email' name = 'email' value = "<?php echo $row['email'];?>"><br><br>
			<input type = 'submit' name = 'submit' value = 'update'>
		</form>
	</body>
</html>
