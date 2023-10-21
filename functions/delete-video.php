<?php
include_once 'connection.php';

$id = $_POST['id'];
$sql = "DELETE FROM videos WHERE id = :id";
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
header('location: ../videos.php?type=success&message=Video deleted successfully.');
?>