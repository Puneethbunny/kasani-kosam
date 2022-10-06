<?php
include "connection.php";

$query = "SELECT * FROM Corporates WHERE Email='$email';";
  
  // FETCHING DATA FROM DATABASE
  $result = $sfconn->query($query);
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
          echo "Password: " .
                $row["Password"]. "<br/>" ; 
        }
    } 
    else {
        echo "0 results";
    }
?>    