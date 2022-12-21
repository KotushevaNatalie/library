<?php
include "database.php";

$sql = mysqli_query($conn, 'SELECT * FROM `literature`');
  while ($result = mysqli_fetch_array($sql)) {
    echo'<tr>'.'<td>'.'<a href = "book.php?id='.$result['id'].'">'.$result['name'].'">'.'</a>'.'</td>'.'<td>'. $result['year'].'</td>'.'<td>' .$result['description'].'</td>'.'<td>'.$result['author'].'</td>'.'<td>'.$result['type'].'</td>'.'</tr>';
  }

  
?>