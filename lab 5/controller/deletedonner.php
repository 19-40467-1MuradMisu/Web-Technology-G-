<?php 

require_once '../model/databasemodel.php';

if (deletedonner($_GET['id'])) {
    header('Location: ../view/showAlldonner.php');
}

 ?>