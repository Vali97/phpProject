<!--for delete Record -->
<?php
	$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$del_sql=mysql_query("DELETE FROM teacher_tbl WHERE teacher_id=$id");
	if($del_sql)
		$msg="1 Record Deleted... !";
	else
		$msg="Could not Delete :".mysql_error();	
			
}
	echo $msg;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
<title>Lista e Petagogëve</title>
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="800">
	<tr>
    
        <td><a href="?tag=teachers_entry"><input type="button" title="Add new Teachers" name="butAdd" value="Shto" id="button-search" /></a></td>
        <td><input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/></td>
        <td ><input type="submit" name="btnsearch" value="Kërko" id="button-search" title="Search Teacher" /></td>
    </tr>
</table>
</form>
</div><!--end of style_div -->
<br />

<div id="content-input">
	 <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>Nr</th>
            <th>Emri</th>
            <th>Gjinia</th>
            <th>Datëlindja</th>
            <th>Vendlindja</th>
            <th>Adresa</th>
            <th>Niveli i Diplomës</th>
            <th>Paga</th>
            <th>I/e martuar</th>
            <th>Nr Tel</th>
            <th>E-mail</th>
            <th>Shënime</th>
            <th colspan="2">Veprime</th>
        </tr>
         <?php
		 $key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM teacher_tbl WHERE f_name  like '%$key%' or l_name like '%$key%'");
	else
        $sql_sel=mysql_query("SELECT * FROM teacher_tbl");
		
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['f_name']."    ".$row['l_name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['pob'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['degree'];?></td>
            <td><?php echo $row['salary'];?></td>
            <td><?php echo $row['married'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['note'];?></td>
            <td><a href="?tag=teachers_entry&opr=upd&rs_id=<?php echo $row['teacher_id'];?>" title="Upate"><img src="picture/update.png" /></a></td>
            <td><a href="?tag=view_teachers&opr=del&rs_id=<?php echo $row['teacher_id'];?>" title="Delete"><img src="picture/delete.png" /></a></td>
        </tr>
    <?php	
    }
    ?>
    </table>
</div><!-- end of content-input -->
</body>
</html>