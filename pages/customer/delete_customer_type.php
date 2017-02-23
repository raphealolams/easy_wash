<?php

include '../../pages/connection.php';

try{

  $sql = $pdo->prepare("DELETE FROM customer_type WHERE customer_type_id= :id");
  $sql->bindParam(':id');
  $result->execute();
} catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}
unset($pdo);
 ?>
