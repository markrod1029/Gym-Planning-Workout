

<?php
	include 'session.php';
	
	$id = $_GET['id'];
		$qry = "DELETE FROM announcements WHERE id = '$id'";
		

		if($conn->query($qry)){
			$_SESSION['success'] = 'Annoucement Deleted Successfully';
			echo "<meta http-equiv='refresh' content='0; url=../annoucement.php'>";
		}else {
		
			$_SESSION['error'] = $conn->error;
			
			echo "<meta http-equiv='refresh' content='0; url=../annoucement.php'>";
		
		}
	
?>