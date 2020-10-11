 
 <!DOCTYPE html>
<html>
<head>
	<title>Editori</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <script type="text/javascript" src="js/dashboard.js"></script>
</head>
<body>

		<div class="wrapper">
 		
        <div class="dash_section">
 			<ul><li><a>Dashboard</a></li>
 				<li><a>Utilizatori</a></li>
 				<li><a>Articole</a></li>
 			 <a href="index.php?action=main">Logout</a>  
      </ul>
              	
        </div>

        

        <div class="title_section">
        <table>
 		      <th>Titlu</th>
 			<tr><td>Articol 1</td></tr>
 			<tr><td>Articol 2</td></tr>
 			<tr><td>Articol 3</td></tr>
 		</table>
        </div>
        
        <div class="author_section">
        	<table>
 		      <th>Autor</th>
 			<tr><td>Autor 1</td></tr>
 			<tr><td>Autor 2</td></tr>
 			<tr><td>Autor 3</td></tr>
 		</table>
        </div>
        
        <div class="actions_section">
        	<table>
 		      <th>Actiuni</th>
 			<tr><td>Edit Delete</td></tr>
 			<tr><td>Edit Delete</td></tr>
 			<tr><td>Edit Delete</td></tr>
 		</table>
        </div>
      
      <div class="add_article">
     <button type="button" onclick="afiseaza(1)" style="display: block"  id="new_article">+</button>
     <p>Adauga <br/>
      continut</p>
     </div>
     <div id="modal" style="display:none">
      <div id="continut" onclick="">
<h2>Adauga postare:</h2>
<form action="index.php?action=addpost" method="POST">
  TITLU:<input type="text"/ value="titlu" name="titlu">
  <br/>
  CONTINUT:<textarea rows="5" cols="100"></textarea>
  <br/>
  <input type="submit" value="submit"/>
</form>
  </div>
</div>
       
      
    

</body>
</html>