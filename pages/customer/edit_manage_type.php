<?php
require '../../pages/connection.php';

$a = $_POST['customer_type'];


try{
    
    $sql = "UPDATE customer_type SET customer_type_name=?, edit_time=NOW() WHERE customer_type_id=?";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':a', $_POST['customer_type']);
    $stmt->execute();
    header('location: manage_type.php');
    
}catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}

unset($pdo); 


 ?>