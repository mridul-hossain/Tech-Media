

			


<?php

require_once "dbconn.php";

$str = $_GET['q'];
    $conn = db_conn();
    $selectQuery = "SELECT * FROM user_data WHERE Name LIKE '%{$str}%' ";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
    echo '<table>';
    echo '<thead>';
                        echo '<td>Name<br></td>';
                        echo '<td>Email<br></td>';
                        echo '<td>Username<br></td>';
                       
                        echo '<td>Address<br></td>';
						  echo '<td>Gender<br></td>';
                    echo '</thead>';
                    echo '<tbody>';
                    if (is_array($row) || is_object($row))
{
    
        foreach ($row as $i) {
                        echo '<tr>';
                                echo '<td>'.$i["Name"].'</td>';
                                echo '<td>'.$i["Email"].'</td>';
                                echo '<td>'.$i["Username"].'</td>';
                               
                                echo '<td>'.$i["Address"].'</td>';
								echo '<td>'.$i["Gender"].'</td>';
                            echo '</tr>';
                    }

}
                    
                    echo '</tbody>';
                    echo '</table>';
					
					
?>