<?php

require_once "DbConnection.php";

$str = $_GET['q'];
    $conn = db_conn();
    $selectQuery = "SELECT * FROM editor WHERE name LIKE '%{$str}%' ";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<table>';
    echo '<thead>';
                        echo '<td>Name</td>';
                        echo '<td>Phone</td>';
                        echo '<td>Email</td>';
                        echo '<td>Address</td>';
                        echo '<td>City</td>';
                        echo '<td>Country</td>';
                    echo '</thead>';
                    echo '<tbody>';
                    if (is_array($row) || is_object($row))
{
    
        foreach ($row as $i) {
                        echo '<tr>';
                                echo '<td>'.$i["name"].'</td>';
                                echo '<td>'.$i["phone"].'</td>';
                                echo '<td>'.$i["email"].'</td>';
                                echo '<td>'.$i["address"].'</td>';
                                echo '<td>'.$i["city"].'</td>';
                                echo '<td>'.$i["country"].'</td>';
                            echo '</tr>';
                    }

}
                    
                    echo '</tbody>';
                    echo '</table>';
