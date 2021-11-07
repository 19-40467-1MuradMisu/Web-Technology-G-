<?php 

require_once 'databaseConnect.php';


function showAlldonner(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `donnerinfo` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showdonner($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `donnerinfo` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchdonner($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `donnerinfo` WHERE Username LIKE '%$username%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function adddonner($data){
	$conn = db_conn();
    $selectQuery = "INSERT into donnerinfo (username, phonenumber, password, email, image,yearlyincome)
VALUES (:username, :phonenumber, :password, :email , :image,:yearlyincome)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':phonenumber' => $data['phonenumber'],
        	':password' => $data['password'],
        	 
            ':email' => $data['email'],
        	':image' => $data['image'],
            ':yearlyincome' => $data['yearlyincome']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updatedonner($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE donnerinfo set username = ?, phonenumber = ?, password = ?, email = ?  where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['username'], $data['phonenumber'], $data['password'], $data['email'],  $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deletedonner($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `donnerinfo` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}