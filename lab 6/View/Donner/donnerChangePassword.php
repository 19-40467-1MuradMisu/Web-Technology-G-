<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Change Password|FoundBD</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./donnerDashboard.php">Dashboard</a>&nbsp;
            <a href="./viewProfile.php">Profile</a>&nbsp;
            <a href="./donnerNotification.php">Notification</a>&nbsp;
            
          </td>
        </tr>
      </table>
      <table align="right">
          <tr>
              <td>
                <a href="../../controller/logout.php">Logout</a>
              </td>
          </tr>

      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    
    <!-- .................................Main Content..................... -->
    <fieldset>
      <form method="post" action="../../controller/Donner/donnerChangePassword.php" >
        <fieldset>
        
            <legend><b>Donner Password Change</b></legend><br>
        
        
            <label>Current Password :  </label>
            <input type="password" id="currentPass" name="currentPass" ><br>
            
        
            
            <label>New Password : </label>
            <input type="password" id="newPass" name="newPass"name="newPass" onkeyup="validation()"/><br><br>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td id="security" align="center"></td>
            </tr>
            <label>Retype New Password : </label>
            <input type="password" id="retypePass" name="retypePass" onkeyup="match()"/><br>
            <hr><br>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td id="ifmached" align="center"></td>
            </tr>
      
        
            <input type="submit" name="submit" id="submit" value="Update">
            
            <input type="submit" name="cancel" id="cancel" value="Cancel"><br><br>
        </fieldset>
        </form>
    </fieldset>
    <fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
  </form>
  <!-- .................................Footer Close..................... -->
  
  
  
  
  <!------jaaava script     -->
  <script>
    function validation() {
      var newpass, msg;
    
     
      newpass = document.getElementById("newPass").value;
      
      if (newpass.length < 8) {
        msg = "Too short and invalid type";
      } 
      else{
        msg = "Strong"   
      }
      

      document.getElementById("security").innerHTML = msg;
    }
    function match() {
      var newpass,retypepass ,msg;
    
     
      newpass = document.getElementById("newPass").value;
      retypepass = document.getElementById("rePass").value;
      
      if (retypepass==newpass) {
        msg = "Matched";
      } 
      else{
        msg = "Not Matched"   
      }
      

      document.getElementById("ifmached").innerHTML = msg;
    }
    </script>
</body>
</html>