<?php 

  $connection = mysqli_connect("localhost","root","","group"); //open connection

if(isset($_POST['post_submit'])){ //if submit is ready or assigned
     $title = $_POST['title'];  // assign value for title to a variable
     $content = $_POST['content'];
	
	 
	 
	 
	 $query = "INSERT INTO data(title,content) VALUES( '{$title}','{$content}')";
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