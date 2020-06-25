 <?php 

  $connection = mysqli_connect("localhost","root","","group");
  
?>

<head><title>racheal</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>

<body>
<div class="container row">

			
		<div class=" col-md-4 ">    
		<form  action="<?php if(isset($_POST['id'])){ echo 'update.php'; }else{ echo 'index.php';}?>" method="POST" >
		<label for="title">Title</label>
		            <input type="hidden" name="id" value="<?php if(isset($_POST['id'])){ echo $_POST['id']; } ?>" />
					<input id="title" class="form-control" type="text" name="title" value="<?php if(isset($_POST['id'])){ echo $_POST['title']; }?>" required /><br /><br>
					<label for="content">Content</label>
					 <textarea class="form-control" name="content"  id="content" cols="20" rows="10"><?php if(isset($_POST['id'])){ echo $_POST['content']; }?></textarea> 
					 <br>   
					<input type="submit" value="<?php if(isset($_POST['id'])){ echo 'Edit'; }else{ echo 'Send';}?>" class="btn btn-success col-md-12" name="post_submit">
			</form>
			</div>

			<?php 
			
			$query = "select * from data"; //STORING QUERY IN A VARIABLE
			$result = mysqli_query($connection,$query); // Connecting to table 'post'
	
			while ($query_field = mysqli_fetch_array($result)){ ?>
					
						<div class="col-md-4">
							<h2><?php echo $query_field['title']; ?></h2>
							<p><?php echo $query_field['content']; ?></p>
							
							
							<form method="POST" action="delete.php">
								<input class="form-control" type="hidden" name="id" value="<?php echo $query_field['id'];?>">
							<button class="btn btn-danger" name="delete"><i class="glyphicon glyphicon-trash"></i></button>
							</form>
							
							<form method="POST" action="index.php">
							<input class="form-control" type="hidden" name="id" value="<?php echo $query_field['id'];?>">
							<input type="hidden" name="title" value="<?php echo $query_field['title']; ?>" />
							<input type="hidden" name="content" value="<?php echo $query_field['content']; ?>" />
							<button class="btn btn-danger" name="edit"><i class="glyphicon glyphicon-edit"></i></button>
							</form>
					
						
							</div>
			<?php  
				} 
			?>
			</div>
</body>