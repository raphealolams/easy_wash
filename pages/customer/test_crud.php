<?php

require "../connection.php";

$surname = $_POST['surname'];
$other_name = $_POST['other_name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];


try{
    $sql = "INSERT INTO test (surname,other_name,gender,address,phone_number) VALUES(:surname, :other_name, :gender, :address, :phone_number)";

$stmt = $pdo->prepare($sql);

//Bind Parameters to statments

    $stmt->bindParam(':surname', $_POST['surname']);
    $stmt->bindParam(':other_name', $_POST['other_name']);
    $stmt->bindParam(':gender', $_POST['gender']);
    $stmt->bindParam(':address', $_POST['address']);
    $stmt->bindParam(':phone_number', $_POST['phone_number']);

//Run the STMT 
$stmt->execute();
echo "Record Add Successfully";
}  catch(PDOException $error){

    die("ERROR: Could not able to execute $sql. " . $error->getMessage());

}

unset($pdo);
?>