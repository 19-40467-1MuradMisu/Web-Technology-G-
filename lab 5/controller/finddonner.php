<?php

require_once '../model/databasemodel.php';

if (isset($_POST['finddonner'])) {
	
		echo $_POST['username'];

    try {
    	
    	$allSearcheddonner = searchdonner($_POST['username']);
    	require_once '../view/showSearcheddonner.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

