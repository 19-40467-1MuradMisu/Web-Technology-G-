<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Login |FundBD</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>

  <!-- ...............................Header Start....................... -->
 
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="../index.php">Home</a>
            <a href="../loginType.php">Login</a>
            <a href="../regType.php">Registration</a>
            <a href="../aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
     <style   >  
  body { 
  background:  lightblue  ; 
  background-image: url("../../assets/icon.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-position: center;
   
}
</style>
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    <fieldset>
    <form method="post" action="../../controller/Donner/donnerLoginCheck.php"> 
      <fieldset>
        <legend><b>Donner Login</b></legend>
        
          <table>
            <tr>
                <td>User Name </td>
                <td>:<input type="text" name="username" onekeyup="validation()" ></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:<input type="password" name="password" onekeyup="validation()"></td>
            </tr>
          </table>	
            <hr>
            <input type="checkbox" name="rememberMe" id="">Remember Me<br><br>
          
              <input type="submit" name="submit" value="Submit">
              <a href="donnerForgotPassword.php"> Forget password?</a>
          
      </fieldset>
    </form>
  </fieldset>
  <fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>

  <!-- .................................Footer Close..................... -->
 
</body>
</html>