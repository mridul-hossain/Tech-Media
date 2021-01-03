<?php
require_once 'dbconn.php';
session_start();

function addProduct($data)
{
	$conn= db_conn();
	$query = "INSERT INTO user_data(Name,Email,Username,Password,ConfirmPass,Address,Gender,Pic) VALUES(:name,:email,:username,:pass,:conpass,:add,:gender,'gAnTMl.jpg')";
	try{
		$stmt = $conn->prepare($query);
		$stmt->execute([
			':name' => $data['name'],
			':email' => $data['email'],
			':username' => $data['username'],
			':pass' => $data['pass'],
			':conpass' => $data['conpass'],
			':add' => $data['add'],
			':gender' => $data['gender']
			
			
		]);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	$conn = null;
	return true;

}
function addpst($data)
{
	$conn= db_conn();
	$query = "INSERT INTO post(Name,title,text,image) VALUES(:name,:title,:text,'abc.jpg')";
	try{
		$stmt = $conn->prepare($query);
		$stmt->execute([
			':name' => $data['name'],
			':title' => $data['title'],
			':text' => $data['text']
			
			
		]);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}

	$conn = null;
	return true;

}

function login($data)
{
    $conn = db_conn();
    $query = "SELECT * FROM user_data WHERE name = :name AND password = :conpass";
    try
    {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':name' => $data['name'],
            ':conpass' => $data['conpass']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showAllUsers(){
	$conn = db_conn();
	
    $selectQuery = "SELECT * FROM  user_data where Name= '$_SESSION[username]';";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

	function showAllposts(){
	$conn = db_conn();
	
    $selectQuery = "SELECT * FROM  post";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}






?>