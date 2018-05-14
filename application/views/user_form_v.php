<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
	
</head>
<body>
	<form action="http://localhost/travelkamu/index.php/User/add" method="post">
		<table>
		<tr>
			<td>Username</td> <td>:</td><td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td> <td>:</td><td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Fullname</td> <td>:</td><td><input type="text" name="fullname"></td>
		</tr>
		<tr>
			<td>Level</td> <td>:</td><td><select name="level">
                <option value="0">User</option>
                <option value="1">Admin</option>
            </select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
		</table>
	</form>
	<a href="<?php echo base_url('index.php/User/view_data/')?>">View Data</a>
</body>
</html>