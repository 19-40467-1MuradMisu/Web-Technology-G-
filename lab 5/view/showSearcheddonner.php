
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:20px solid white;
		}
	</style>
</head>
<body>

<?php 
    include "navigation.php";

?>
<legend style="color: red;"><b>Searched Donner</b></legend>
<table>
	<thead>
		<tr>
			<th>User ID</th>
			<th>User Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($Searcheddonner as $i => $user): ?>
			<tr>
				<td><a href="../view/showdonner.php ?id=<?php echo $user['id'] ?>"><?php echo $user['id'] ?></a></td>
				<td><?php echo $user['username'] ?></td>
				<td><a href="../view/editdonner.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="../view/fordonnerdelete.php?id=<?php echo $user['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
<?php
require '../color.php';

?>


</body>
</html>