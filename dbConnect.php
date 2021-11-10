<?php
function db_conn()
{
    $servername = "localhost";
    $username = "root";
    $password = "2524";
    $dbname = "tech_media";

    try {
        $conn = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // var_dump($conn) ;
    } catch (PDOException $e) {
        echo $e->getMessage();
        echo "bye bye";
    }
    return $conn;
}
