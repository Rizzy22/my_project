<?php

$connection = mysqli_connect("localhost","root","","group"); //open connection

if(isset($_POST['delete'])){ //if submit is ready or assigned
	$id = $_POST['id'];
	 
	 $query = "DELETE FROM `data` WHERE id='$id'";
	 $process = mysqli_query($connection,$query);
	 
	 
	if($process){
				header("location:index.php");
				exit;
		     }else {
		     die(mysqli_error($connection)."Cannot process");
		}  
	 }
	 
	 
	
  
  mysqli_close($connection); //close connection.
?>