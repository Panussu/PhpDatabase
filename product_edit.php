<?php
include"connect.php";
$sql= "SELECT * FROM tbl_product  WHERE id='$_GET[id]'"; 
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result) ;
?>

<form action="product_update.php?id=<?php echo $row[id]?>" method="post" enctype="multipart/form-data">
    name <input type="text" name="name" value="<?php echo $row[name]; ?>"/>
    prize <input type="int" name="price" value="<?php echo $row[price]; ?>"/>
    stock <input type="int" name="stock" value="<?php echo $row[stock]; ?>"/><br />
    description <input type="text" name="description" value="<?php echo $row[description]; ?>"/>
    <input type="submit" value="update" />

</form>