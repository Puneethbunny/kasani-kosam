<?php 
include "connection.php";
 $sql = "SELECT Logo FROM Corporates WHERE Email='saipuneeth71@gmail.com'";
     $result = mysqli_query($sfconn, $sql);
     $row = mysqli_num_rows($result); 
     //retrive data print here
     if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        $image=$row['Logo'];
        //echo $image; ?>
        <img src="<? echo 'desktop/download.jpeg'; ?>"
        <?php
        }
        }
        else {
        echo "No results";
        }
        ?>