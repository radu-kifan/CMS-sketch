<!DOCTYPE html>
<html>
<head>
	<title>CMS</title>

<link rel="stylesheet" type="text/css" href="css/main.css">
<script type="text/javascript" src="js/dashboard.js"></script>

 </head>

<body>
	
	<div class="container">
	 
	 <a href="index.php?action=login">Login</a> 
	 <br/>
	 <br/>
	 <a href="index.php?action=newuser">Creare cont nou</a> 
	 
 
 <section class="search_bar"> 
		<form action="index.php?action=main" method="POST">
		<input type="text" placeholder="search" name="search">
	</form>
</section>
		 
	    

<?php 
		global $db;
		$query = "SELECT * FROM `articole`";
		$result = mysqli_query($db, $query);
		$queryResults = mysqli_num_rows($result);

        if($queryResults > 0){
        	while($row = mysqli_fetch_assoc($result)){
        		echo"<div class='content'>
        		<input type='button' value='Read more' onclick='readtext(1)' style='overflow:hidden' id='read'> 
        		<h3>" . $row['titlu'] .  "</h3>
        		<p>" . $row['continut'] .  "<p>
        		<p>" . $row['autor'] .   "</p>
        		<p>" . $row['created_at'] .  "</p>
        		</div>";
        	}
        }

        ?>

<p>&lt; Prev 1 2 3 4 5 Next &gt;</p>

</div>

 




</body>
</html>