
<?php 
	session_start();
	
	$username = "admin";
	$password ="admin";

	if (isset($_POST['un'])) {
		if ($_POST['un']==$username && $_POST['pass']==$password) {
			$_SESSION['un'] = $username;
			header("location: 1(E)_Logged In Dashboard.php");
		}
		else{
			$msg = "Username or Password is incorrect";
		}
	}


 ?>

<?php
$username ="";
$err_un ="";
$password= "";
$err_pass= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["un"])) {
    $err_un = "Cannot be Empty";
  }
      else {
    $username = $_POST["un"];
  }

  if (!preg_match("/^[a-z\.A-Z-' ]*$/",$username)) {
  $err_un = "Only letters, white space allowed";
  }
  
  

if(empty($_POST["pass"])){

	$err_pass="Password is required";
 } 
 
?>

<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<?php require 'Header.php';?>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
		
	


			<fieldset style="height: 250px;  width: 1488px;">
      
      <fieldset style=" height: 180px;  width: 500px;margin: 0px auto;"> 

				<legend><b>LOGIN</b></legend>
				<table>				
					<tr>
					<td><span>User Name:</span></td>
					<td><input type="text" name="un" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];} ?>"></td>
					
				</tr>	
				<tr>
					
  				<td><span>Password:</span></td>  									
  				<td><input type="Password" name="pass" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];} ?>"></td>

  			
  			</tr>
  		
  </table>
					<br><hr>
	                 <input type="checkbox" name="remember">
                 <label>Remeber me</label>
                 
                 <br><br>
              
                 <input type="submit" name="submit">
               
                 <a href="1(D)_Forgot Password.php">Forget Password?</a>

		</fieldset>
	</fieldset>
</form>

<?php require 'footer.php';?>

<span style="text-align: center; color: red;"><?php if (isset($msg)) {echo $msg;} ?></span>
	</body>
	</html>


