<?php  
require_once '../model/databasemodel.php';


if (isset($_POST['updatedonner'])) {

	$data['username'] = $_POST['username'];
	$data['phonenumber'] = $_POST['phonenumber'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data[' email'] = $_POST['email'];
	 



	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../files/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);


  if (updatedonner($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/showdonner.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>