<?php
include_once '../../pages/connetion.php';

// try {
//   if($_POST['del_id'])
//   {
//    $id = $_POST['del_id'];
//    $stmt=$db_con->prepare("DELETE FROM customer_type WHERE customer_type_id=:id");
//    $stmt->execute(array(':id'=>$id));
//   }
// }
// catch{
//
// }

try {
	$sql = "DELETE FROM customer_type WHERE customer_type_id = :id";
	$query = $pdo->prepare($sql);
	$query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
	$query->execute();
}
catch (PDOException $e) {
	echo 'PDOException : '.  $e->getMessage();
}

?>
