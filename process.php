<?php

  
    try {
    $pdo = new PDO('mysql:host=localhost;dbname=fml', 'root', '');
        #Set Error Mode to ERRMODE_EXCEPTION.
        $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

$input = $_POST["name"];



		$stmt = $pdo->prepare('Select * from gfy WHERE last = :last');
		$stmt->bindParam( ":last", $input, PDO::PARAM_STR, 10);
        $stmt->execute();
    } catch (Exception $e) {}
        

    
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $last = $row['last'];
        $first = $row['first'];
        $id = $row['id'];
        $end = $row['end'];
         echo $last . " " . $first . " " . $id . " " . $end . "\n<br />";
    }
   
    
?>