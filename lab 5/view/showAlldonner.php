<?php  
require_once '../controller/donnerinfo.php';

$users = fetchAlldonner();


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
<legend style="color: red;"><b><h2>All Donner</h2> </b> </legend>
<table>
	<thead>
		<tr>
			
			<th>User Name</th>
			<th>Phone Number</th>
			<th>Password</th>
			<th> E-Mail</th>
		 
			<th>Image</th>
			<th>Yearly Income </th>
			<th>Action</th>
		</tr>

	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><a href="showdonner.php?id=<?php echo $user['id'] ?>"><?php echo $user['username'] ?></a></td>
				<td><?php echo $user['phonenumber'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><?php echo $user['email'] ?></td>
				 
				
				<td><img width="100px" src="../files/<?php echo $user['image'] ?>" alt="<?php echo $user['username'] ?>"></td>
				<td><?php echo $user['yearlyincome'] ?></td>


				<td><a href="editdonner.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="../view/fordonnerdelete.php?id=<?php echo $user['id'] ?>" >Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
<?php
require '../color.php';

?> 


</body>
</html>