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

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>data_process</title>
  </head>
  <body>
  <article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <div class="result">
		<h2>Registered Users Details</h2>
	<table class="table table-light table-striped">
  <thead>
    <tr>
      <th scope="col">S No.</th>
      <th scope="col">Name</th>
      <th scope="col">Mo Number</th>
      <th scope="col">Address</th>
      <th scope="col">Other info</th>

      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
	  <?php
			$sql = 'select * from data';
			$result = mysqli_query($con, $sql);
			$i=1;
			while($row = mysqli_fetch_assoc($result)){
				echo '<tr>
				<td>'.$i++.'</td>
				<td>'.$row['name'].'</td>
				<td>'.$row['mobnum'].'</td>
				<td>'.$row['address'].'</td>
				<td>'.$row['des'].'</td>
				
				<td><a href="index.php?edit='.$row['name'].'" onClick="return confirm(\'Are you sure?\');">Edit</a></td>
				<td><a href="index.php?del='.$row['name'].'" onClick="return confirm(\'Are you sure? \');" > Delete </a></td>
				</tr>';	
			}
			
			?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>