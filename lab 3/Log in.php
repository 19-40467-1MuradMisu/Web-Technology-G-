<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> LAB 3 (log in )</title>
  <style type="text/css">.color: red;
  </style>
  </head>
<body>

  <?php
 $userErr ;$passwordErr ;
 $username ;$password  ;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{ 
     
    if (empty($_POST["username"])) {
        $userErr = "  Enter Your Username!";
    } else {
        $username = test_input($_POST["username"]);
        }
   
    if(!empty($_POST["password"])  ) {
        $password = test_input($_POST["password"]);
       
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $passwordErr = " Enter Your Password!";
        }
    }
    
    }
 
 
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<b>Username</b><br><br>
<input type="text" name="Username">
<br><br>
<b>Password</b><br><br>
<input type="text" name="Password">
 
<br><br>
 
<input type="submit" name="submit" value="Submit">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Your Input:</h1>";
  }
 
  echo $username ."<br>";
  echo $password ."<br>";
 
  
?>



</body>
</html>