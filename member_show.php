<?php

include "connect.php";

$sql = "SELECT * FROM tbl_member";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "$row[firstname] $row[lastname] </br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>