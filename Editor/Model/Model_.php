<?php

require_once '../View/DbConnection.php';

function addEditor($data)
{
    $conn= db_conn();
    $query = "INSERT INTO editor(pass, name, phone, email, city, country, dob, username, gender) VALUES(:pass,:name,:phone,:email,:city,:country,:dob,:username,:gender)";
    try{
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':pass' => $data['pass'],
            ':name' => $data['name'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':city' => $data['city'],
            ':country' => $data['country'],
            ':dob' => $data['dob'],
            ':username' => $data['username'],
            ':gender' => $data['gender']
        ]);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;

}


function deleteEditor($data)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM editor WHERE username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$data]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function login($data)
{
    $conn = db_conn();
    $query = "SELECT * FROM editor WHERE username = :username AND pass = :password";
    try
    {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function showInfo($data)
{
    $conn = db_conn();
    $query = "SELECT * FROM editor WHERE username = ?";
    try
    {
        $stmt = $conn->prepare($query);
        $stmt->execute([$data]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function editInfo($data){
    $conn = db_conn();
    $selectQuery = "UPDATE editor set name = ?, email = ?, country = ?, city = ?, phone = ?, address = ?, gender = ?, dob = ?, image = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['country'],$data['city'], $data['phone'], $data['address'], $data['gender'], $data['dob'], $data['image'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function showAllPosts(){
    $conn = db_conn();
    $selectQuery = 'SELECT user.name, user.image, post.* FROM post,user WHERE user.id = post.user_id AND post.shown = 1 AND post.visibility = 1';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function showAllPendingPosts(){
    $conn = db_conn();
    $selectQuery = 'SELECT user.name, user.image, post.* FROM post,user WHERE user.id = post.user_id AND post.shown = 0';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function pendingPostsCount(){
    $conn = db_conn();
    $selectQuery = 'SELECT count(*) FROM post WHERE shown = 0';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function approvePost($id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE post SET shown = 1, visibility = 1 WHERE id=?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}



function hidePost($id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE post SET visibility = 0 WHERE id=?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}



function deletePost($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM post WHERE `id` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function showAllComments(){
    $conn = db_conn();
    $selectQuery = 'SELECT user.name, user.image, comment.* FROM comment,user,post WHERE comment.post_id = post.id AND comment.user_id = user.id AND comment.shown = 1';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function hideComment($id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE comment SET shown = 0 WHERE id=?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


?>