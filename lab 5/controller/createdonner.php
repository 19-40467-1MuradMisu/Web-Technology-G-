<?php  
require_once '../model/databasemodel.php';


if (isset($_POST['adddonner'])) {
	$data['username'] = $_POST['username'];
	$data['phonenumber'] = $_POST['phonenumber'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['email'] = $_POST['email'];
	 
	$data['image'] = basename($_FILES["image"]["name"]);
	$data['yearlyincome'] = $_POST['yearlyincome'];

	$target_dir = "../files/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (adddonner($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>