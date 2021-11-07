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
			border:70px solid white;
		}

	</style>
</head>
<body>
<legend style="color: red;"><b>Delete</b></legend>
<table>
	<tr>
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th>E-Mail</th>
			 
			<th>Image</th>
	</tr>
	<tr>
				<td><?php echo $user['username'] ?></td>
				<td><?php echo $user['phonenumber'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['email'] ?></td>
				 
				
				<td><img width="100px" src="../files/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>

				<td style="text-align: center;"><a href="../controller/deletedonner.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
	</tr>

   
</table>
 <?php
require '../color.php';

?> 

</body>
</html>