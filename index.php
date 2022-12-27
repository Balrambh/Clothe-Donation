<?php
$con = mysqli_connect("localhost", "root", "mysql", "data_store");
$msg = '';
if(!$con){
	$msg .= '<h3 style="color:#ff0000;">Error # Unable to Connect</h3>';
}

if(isset($_POST['name'])){
	if($_POST['edit_sno']==''){
	$sql = 'insert into data (name, mobnum, address,des) values ("'.$_POST['name'].'", "'.$_POST['mobnum'].'","'.$_POST['address'].'","'.$_POST['des'].'")';
	}
	else{
		$sql = 'update data set name="'.$_POST['name'].'", mobnum="'.$_POST['mobnum'].'", address="'.$_POST['address'].'",des="'.$_POST['des'].'" where name="'.$_POST['edit_sno'].'"';
	}
	mysqli_query($con, $sql);
	if(mysqli_error($con)){
		$msg .= '<h3 style="color:#ff0000;">Error # 1 : '.mysqli_error($con).' >> '.$sql;
	}
	else{
		$msg .= '<h3 style="color:#00FF00;">Data Inserted</h3>';
	}
	
}

if(isset($_GET['del'])){
	$sql = 'delete from data where name="'.$_GET['del'].'"';
	mysqli_query($con, $sql);
	if(mysqli_error($con)){
		$msg .= '<h3 style="color:#ff0000;">Error in deleting . '.mysqli_error($con).' >> '.$sql.'</h3>';
	}
	else{
		$msg .= '<h3 style="color:#00ff00;">Deleted</h3>';
	}
}
if(isset($_GET['edit'])){
	$sql = 'select * from data where name="'.$_GET['edit'].'"';
	
	$row = mysqli_fetch_assoc(mysqli_query($con, $sql));
}

?>
