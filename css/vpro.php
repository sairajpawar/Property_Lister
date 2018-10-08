C:\xampp\htdocs\property_listers\css\vpro.php
<?php
session_start();
if(!$_SESSION['username']){
	header("location: index.php");
}
else{
include("../connection.php");
?>
<html>
<head>
  <title>View Product</title>
</head>
<body>
<a href="adminpanel.php">back to home</a>
<table align="center" width="750" border="2" bgcolor="orange">
	    <tr align="center">
            <td colspan="8"><h2>View Product</h2> </td>
        </tr>
		<tr>
		    <td align="center"><b>Select Category: </b></td>
			<td> 
			<select name="select_cat" onchange="location = this.options[this.selectedIndex].value;">
			<?php
			if(isset($_GET['cat_id'])){
				$id = $_GET['cat_id'];
				$_SESSION["cat"] = $id;
			}
			if(isset($_GET['us'])){
				$_SESSION["cat"] = "";
			}
			?>
			<?php  
                $query = "SELECT * FROM categories";
                $result = mysqli_query($conn,$query);
				$id = $_SESSION["cat"];
				echo "<option value='vpro.php?us=1'>Select Category</option>";
                while($rows = mysqli_fetch_assoc($result)){
                    $cat_id = $rows['ID'];
                    $cat_name = $rows['CATEGORY'];
					if($cat_id == $id){
						$selected = "selected";
					}else{
						$selected = "";
					}
                   echo"<option value='vpro.php?cat_id=$cat_id' $selected >$cat_name</option>";
                }
			?>
			</select>
		</tr>
</table>



<?php
if(@$_SESSION["cat"] == 1){
	@$cate = "mobiles";
}elseif(@$_SESSION["cat"] == 2){
	@$cate = "men";
}elseif(@$_SESSION["cat"] == 3){
	@$cate = "women";
}
?>

<?php
if(isset($_GET['del'])){
	$dp_id = $_GET['del'];
	$del1 = "DELETE FROM $cate WHERE PRO_ID=$dp_id";
	$del2 = mysqli_query($conn,$del1);
	echo"<script>window.open('vpro.php','_self')</script>";
}

?>

<table align="center" width="1600" border="2" bgcolor="orange">
	<?php
	if(@$cate == "mobiles"){
	?>
	<tr>
		<td align="center"><b>NO.</b></td>
		<td align="center"><b>IMAGE</b></td>
		<td align="center"><b>TITLE</b></td>
		<td align="center"><b>BRAND</b></td>
		<td align="center"><b>MODEL</b></td>
		<td align="center"><b>IMEI</b></td>
		<td align="center"><b>PRICE</b></td>
		<td align="center"><b>DESCRIPTION</b></td>
		<td align="center"><b>DATE</b></td>
		<td align="center"><b>DELETE</b></td>
	</tr>
	<?php
	$query = "SELECT * FROM mobiles";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result)){
        $pro_id = $row[0];
		$pro_img = $row[1];
		$pro_title = $row[2];
		$pro_brand = $row[3];
		$pro_model = $row[4];
		$pro_imei = $row[5];
		$pro_price = $row[6];
		$pro_desc = $row[7];
		$pro_date = $row[8];
	?>	
	<tr>
			<td align="center"><?php echo $pro_id; ?></td>
			<td align="center"><img src="../image/products/mobile/<?php echo $pro_img; ?>" alt="<?php echo $pro_img; ?>" width="75" height="100"></td>
			<td align="center"><?php echo $pro_title; ?></td> 
			<td align="center"><?php echo $pro_brand; ?></td> 
			<td align="center"><?php echo $pro_model; ?></td> 
			<td align="center"><?php echo $pro_imei; ?></td> 
			<td align="center"><?php echo $pro_price; ?></td> 
			<td align="center"><?php echo $pro_desc; ?></td>
			<td align="center"><?php echo $pro_date; ?></td> 
			<td align="center"><a href='vpro.php?del=<?php echo $pro_id; ?>'>DELETE</td>
	</tr>
	<?php
	}	
	}elseif(@$cate == "men"){
	?>
	<tr>
		<td align="center"><b>NO.</b></td>
		<td align="center"><b>IMAGE</b></td>
		<td align="center"><b>TITLE</b></td>
		<td align="center"><b>BRAND</b></td>
		<td align="center"><b>SIZE</b></td>
		<td align="center"><b>PRICE</b></td>
		<td align="center"><b>DESCRIPTION</b></td>
		<td align="center"><b>DATE</b></td>
		<td align="center"><b>DELETE</b></td>
	</tr>
	<?php
	$query = "SELECT * FROM men";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($result)){
        $pro_id = $row[0];
		$pro_img = $row[1];
		$pro_title = $row[2];
		$pro_brand = $row[3];
		$pro_size = $row[4];
		$pro_price = $row[5];
		$pro_desc = $row[6];
		$pro_date = $row[7];
	?>	
	<tr>
			<td align="center"><?php echo $pro_id; ?></td>
			<td align="center"><img src="../image/products/men/<?php echo $pro_img; ?>" alt="<?php echo $pro_img; ?>" width="75" height="100"></td>
			<td align="center"><?php echo $pro_title; ?></td> 
			<td align="center"><?php echo $pro_brand; ?></td> 
			<td align="center"><?php echo $pro_size; ?></td> 
			<td align="center"><?php echo $pro_price; ?></td> 
			<td align="center"><?php echo $pro_desc; ?></td>
			<td align="center"><?php echo $pro_date; ?></td> 
			<td align="center"><a href='vpro.php?del=<?php echo $pro_id; ?>'>DELETE</td>
	</tr>
	<?php
	}
	}elseif(@$cate == "women"){
	?>
	<!----   columns for women -->
	<?php
	}
	?>


</table>
</body>
</html>
<?php
}
?>
