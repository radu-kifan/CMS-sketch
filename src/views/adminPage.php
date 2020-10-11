<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

<link rel="stylesheet" type="text/css" href="css/dashboard.css">
 
 </head>
<body>
 	<div class="wrapper">
 		
 		<div class="dash_section">
 			<ul><li><a>Dashboard</a></li>
 				<li><a>Utilizatori</a></li>
 				<li><a>Articole</a></li>
 			 <a href="index.php?action=main">Logout</a>   
      </ul>	
      <p> </p>
        </div>
  
 		
 		<div class="username_section">
             <table>
 		      <th>Nume</th>
 			 <?php 
     
global $db;
    $query = "SELECT * FROM `utilizatori`";
    $result = mysqli_query($db, $query);
    $queryResults = mysqli_num_rows($result);

   if($queryResults > 0){
    while($row = mysqli_fetch_assoc($result)){
            echo" 
            <tr><td>" . $row['username'] . "</td></tr>";
           
         }     
        }  
 ?>
      </table>
     </div>
 		
 		
    <div class="register_date_section">
 		 <table>
 		    <th>Data Inregistrarii</th>
 		        <?php 
     
global $db;
    $query = "SELECT * FROM `utilizatori`";
    $result = mysqli_query($db, $query);
    $queryResults = mysqli_num_rows($result);

   if($queryResults > 0){
    while($row = mysqli_fetch_assoc($result)){
            echo" 
            <tr><td>" . $row['created_at'] . "</td></tr>";
           
         }     
        }  
 ?>
         </table>
        </div>

 		
       <div class="log_date_section">
 		<table>
 		    <th>Ultima logare</th>
 		    <tr><td>In lucru!</td></tr>
 			<tr><td></td></tr>
 			<tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>  
        </table>
       </div>
 		 
 		
    <div class="privileges_section">
 		      <table>
 		    <th>Status</th>
 		      <?php 
     
global $db;
    $query = "SELECT * FROM `utilizatori`";
    $result = mysqli_query($db, $query);
    $queryResults = mysqli_num_rows($result);

   if($queryResults > 0){
    while($row = mysqli_fetch_assoc($result)){
            echo" 
            <tr><td>" . $row['status'] . "</td></tr>";
           
         }     
        }  
 ?>
         </table>
 		</div>
    </div>





 </body>
 </html>