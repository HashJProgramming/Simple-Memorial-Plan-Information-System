<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');

if(isset($_FILES['image'])){
    $target_dir = "gallery/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $stmt = $db->prepare("INSERT INTO `gallery` (`photo`) VALUES (:photo)");
    $stmt->bindValue(':photo', $target_file);
    $stmt->execute();
    header('Location: ../gallery.php?type=success&message=Image added successfully.');
} else{
    header('location: ../gallery.php?type=error&message=Please select an image.');
}