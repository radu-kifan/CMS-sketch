<?php 

function addText($titlu,$continut){
    	global $db;
    	$query = "INSERT INTO `articole`
             SET
             	`titlu`= ?,
                `continut` = ?
                 
                  ";
                
                $statement = $db->prepare($query);
	            $statement->bind_param("ss", $titlu,$continut);
	            $statement->execute();
    } 
	

?>
