<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');

if(isset($_FILES['image']) && isset($_POST['id'])){
    $target_dir = "gallery/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $stmt = $db->prepare("UPDATE `gallery` SET `photo` = :photo WHERE `id` = :id");
    $stmt->bindValue(':photo', $target_file);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('Location: ../gallery.php?type=success&message=Image updated successfully.');
} else{
    header('location: ../gallery.php?type=error&message=Please select an image.');
}