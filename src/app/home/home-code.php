<?php
  include('../../db/connectdb.php'); // Includes database connection
  include('../header/header.php'); // Standard Header
  
  $sql = 'SELECT * FROM customers ORDER BY id DESC';
           foreach ($pdo->query($sql) as $row) {
                    echo '<tr>';
                    echo '<td>'. $row['name'] . '</td>';
                    echo '<td>'. $row['email'] . '</td>';
                    echo '<td>'. $row['mobile'] . '</td>';
                    echo '</tr>';
           }
- See more at: http://www.startutorial.com/articles/view/php-crud-tutorial-part-1/#sthash.v2GfBP8w.dpuf


?>
