<?php  
require_once '../controller/donnerinfo.php';

$user = fetchdonner($_GET['id']);


    include "navigation.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
table,td,th{
			border:25px solid white;
		}

	</style>
</head>
<body>

<table>
	
            <legend style="color: red;"><b>User</b> </legend>
	<tr>
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th> E-Mail</th>
			 
			<th>Image</th>
	</tr>
	<tr>
				<td><a href="showdonner.php?id=<?php echo $user['id'] ?>"><?php echo $user['username'] ?></a></td>
				<td><?php echo $user['phonenumber'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['email'] ?></td>
 
				
				
				<td><img width="100px" src="../files/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>
	</tr>

</table>
<?php
require '../color.php';

?>


</body>
</html>