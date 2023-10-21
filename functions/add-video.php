
<?php
include_once 'connection.php';

$title = $_POST['title'];
$description = $_POST['description'];
$target_dir = "videos/";
$target_file = $target_dir . basename($_FILES["video"]["name"]);
move_uploaded_file($_FILES["video"]["tmp_name"], $target_file);  

$sql = "INSERT INTO videos (title, description, video) VALUES (:title, :description, :video)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':video', $target_file);
$stmt->execute();
header('location: ../videos.php?type=success&message=Video added successfully.');