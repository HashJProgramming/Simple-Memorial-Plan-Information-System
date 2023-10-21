<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');

if(isset($_POST['id'])){
    $stmt = $db->prepare("DELETE FROM `gallery` WHERE `id` = :id");
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();
    header('Location: ../gallery.php?type=success&message=Image deleted successfully.');
} else{
    header('location: ../gallery.php?type=error&message=Please select an image.');
}