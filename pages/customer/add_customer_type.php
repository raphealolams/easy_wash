<?php
require '../../pages/connection.php';

$a = $_POST['customer_type_name'];


try{
    
    $sql = "INSERT INTO customer_type (customer_type_name,create_time) VALUES (:a, NOW())";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->bindParam(':a', $_POST['customer_type_name']);
    $stmt->execute();
    header('location: manage_type.php');
    
}catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}

unset($pdo); 


 ?>
