<?php 
if(isset( $_POST['submit'])){
  
  
    $type = $_POST['loginType'];
    
    if($type == "Admin"){
      
      header('location: ../View/Admin/adminLogin.php');
     
    }
    if($type == "Employee"){
      
      header('location: ../View/Employee/employeeLogin.php');
     
    }
    if($type == "Donner"){
      
      header('location: ../View/Donner/donnerLogin.php');
     
    }
    if($type == "Applicant"){
      
      header('location: ../View/Applicant/applicantLogin.php');
     
    }
    

    
  }


?>