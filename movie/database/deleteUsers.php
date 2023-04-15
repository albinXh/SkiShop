<?php
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=:id";
$prep = $con->prepare($sql);
$prep->prepare(':id',$id);
$prep->execute();

header("Location: dashboard.php");
?>