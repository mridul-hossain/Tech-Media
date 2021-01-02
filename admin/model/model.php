<?php
session_start();
include("../../dbConnect.php");

/** POST RELATED FUNCTIONS */

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
function approvePost($id)
{
    $conn = db_conn();
    $selectQuery = "UPDATE post SET approved = 1 WHERE id=?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showPendingPosts()
{
    $conn = db_conn();
    $selectQuery = 'SELECT user.name, user.image, post.* FROM post,user WHERE user.id = post.user_id and approved = 0 ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showApprovedPosts()
{
    $conn = db_conn();
    $selectQuery = 'SELECT user.name, user.image, post.* FROM post,user WHERE user.id = post.user_id and approved = 1 ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showProfile($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function showPassword($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT pass FROM `admin` where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function editInfo($data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE admin SET name = ?, email = ?, country = ?, city = ?, phone = ?, address = ?, gender = ?, dob = ?, image = ? where username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['country'], $data['city'], $data['phone'], $data['address'], $data['gender'], $data['dob'], $data['image'], $data['username']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function editPassword($data, $username)
{
    $conn = db_conn();
    $selectQuery = "UPDATE admin SET pass=? WHERE username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['pass'], $username
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function showAllEditors()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM editor ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showEditor($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `editor` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showAllUsers()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM user ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showUser($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function addAdmin($data)
{
    $conn = db_conn();
    $query = "INSERT INTO admin(pass, name, phone, email, city, country, dob, username, gender) VALUES(:pass,:name,:phone,:email,:city,:country,:dob,:username,:gender)";
    try {
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
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function addEditor($data)
{
    $conn = db_conn();
    $query = "INSERT INTO editor(pass, name, phone, email, city, country, dob, username, gender) VALUES(:pass,:name,:phone,:email,:city,:country,:dob,:username,:gender)";
    try {
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
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateEditor($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user set Name = ?, Surname = ?, Username = ?, image = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['surname'], $data['username'], $data['image'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteEditor($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user` WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function addUser($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into user (Name, Surname, Username, Password, image)
VALUES (:name, :surname, :username, :password, :image)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':username' => $data['username'],
            ':password' => $data['password'],
            ':image' => $data['image']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateUser($id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE user set Name = ?, Surname = ?, Username = ?, image = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['surname'], $data['username'], $data['image'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deleteUser($id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM `user` WHERE `ID` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
