
 
<?php
$add_subcategory = mysqli_real_escape_string($conn, $_POST['add_subcategory']);
if (!empty($submit333)){
$editdate = date("ymd"); 
$nowDate = gmdate("Ym"); 
$subcategory_name = mysqli_real_escape_string($conn, $_POST['$subcategory_name']);
	echo $subcategory_name;
$sql = "INSERT INTO subcategories (subcategory_name, subcategory_name_editor, subcategory_name_editdate,  subcategory_name_bill_month_year) VALUES('$subcategory_name', '$user', '$editdate', '$nowDate')";  
mysqli_query($conn, $sql); 
}
?>


<form action="index.php" method="post" enctype="multipart/form-data"> 
<div class="form-group" >
<table class="table"  >
<tbody>
<tr>
<th scope="row"></th>
<td>
<center><font size="5" color="#D8D8D8" >Add Subcategory:</font></center>
</td>
<td>
<input style="background:#DEFFFF;color:#000000;" class="form-control name_list" name="subcategory_name" size="40"  maxlength="50" value="" placeholder="Enter Project Name" required/><br>
</td>
</tr>
</tbody>
</table>
<center><input type="submit" value="add_subcategory" name="add_subcategory"></center><br>  
</div>
</form> 
