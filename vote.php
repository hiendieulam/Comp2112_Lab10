<?php
 require_once 'db.php';
 
 // Get data from client submit to server
 $vote = $_POST['vote'];
 
 $sql='insert into HIEN_VOTE(vote) values(:vote)'; // Add 1 line into HIEN_VOTE table
 $cmd = $conn->prepare($sql);
 $cmd->bindParam(':vote', $vote, PDO::PARAM_STR); // Get value into vote variable
 
 // Execute the SQL statement
 $cmd->execute(); 
 $conn=null; // Stop connect Database

?>