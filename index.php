<?php include('db_connect.php'); ?>

<?php
	if(isset($_POST['submit'])){
		$user_id=$_POST['user_id'];
		$password=$_POST['password'];

		$query="INSERT INTO cse482 (user_ID,password)
	VALUES('{$user_id}','{$password}');";
	
		$performQuery=mysqli_query($connection, $query);
		if(!$performQuery)
			echo 'Query unsuccessful';
		else
			echo 'Query successful';
			
	}
?>
<?php include('db_close.php'); ?>
