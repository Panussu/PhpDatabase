<?php
include "connect.php";

$sql="DELETE FROM tbl_member WHERE id='$_GET[id]'"; 

if (mysqli_query($conn,$sql)) {
    echo"deleting done";
    header("location: member_show.php");
} else {
    echo "error deleting record" . mysqli_error($conn);
}

mysqli_close($conn);
?>