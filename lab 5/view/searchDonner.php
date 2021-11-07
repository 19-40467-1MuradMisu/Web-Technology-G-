
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "navigation.php";

?>
   
    <form method="post" action="../controller/finddonner.php">
      <h2>Search Donner </h2>
      <input type="text" name="username" />
      <input type="submit" name="finddonner" value="Search"/>
    </form>

 <?php
require '../color.php';

?> 
 
  </body>
</html>