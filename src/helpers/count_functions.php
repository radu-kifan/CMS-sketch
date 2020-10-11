 <?php 
		
		function count_articles(){
		global $db;
		$query = "SELECT COUNT(id) AS postari FROM articole";
		$result = mysqli_query($db,$query);
		$values = mysqli_fetch_assoc($result);
		$num_rows = $values['postari'];
        print_r($num_rows);
	     }
		 

		 function count_editors(){
		global $db;
$query = "SELECT Count(id) AS editors FROM utilizatori WHERE status = 'editor'";
		$result = mysqli_query($db,$query);
		$values = mysqli_fetch_assoc($result);
		$num_rows = $values['editors'];
        print_r($num_rows);
	     }
		 

         function count_users(){
		global $db;
		$query = "SELECT Count(id) AS users FROM utilizatori WHERE status = 'utilizator'";
		$result = mysqli_query($db,$query);
		$values = mysqli_fetch_assoc($result);
		$num_rows = $values['users'];
        print_r($num_rows);
	     }
		 

   




?>

