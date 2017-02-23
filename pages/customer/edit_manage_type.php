<?php
require '../../pages/connection.php';

$type = $_POST['type'];
$id = $_POST['id'];

try{


    $sql = "UPDATE customer_type SET customer_type_name= ? , edit_time=NOW() WHERE customer_type_id = ? ";
    // $stmt = $pdo->prepare($sql);
    // $stmt->bindParam(':type', $_POST['type']);
    // $stmt->bindParam(':id', $_POST['id']);
    // $stmt->execute();
    $pdo->prepare($sql)->execute([$type, $id]);


    //echo $stmt->rowCount() . " records UPDATED successfully";
    header('location: manage_type.php');

}catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}
unset($pdo);
 ?>
