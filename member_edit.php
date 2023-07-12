<?php
include"connect.php";
$sql= "SELECT * FROM tbl_member  WHERE id='$_GET[id]'"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;
?>

<form action="member_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data">
    ชื่อ <input type="text" name="firstname" value="<?php echo $row[firstname]; ?>"/>
    นามสกุล <input type="text" name="lastname" value="<?php echo $row[lastname]; ?>"/>
    email <input type="email" name="email" value="<?php echo $row[email]; ?>"/><br />
    เบอร์โทร <input type="text" name="phone" value="<?php echo $row[phone]; ?>"/>
    ที่อยู่ <textarea name="address"> <?php echo $row[address]; ?> </textarea> 
    เเนบรูป <input type="file" name="photo" /> <br />
    <input type="submit" value="update" />

</form>