<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $stmt = $db->prepare("DELETE FROM `members` WHERE `id` = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    header('Location: ../index.php?type=success&message=Member deleted successfully.');
} else{
    header('location: ../index.php?type=error&message=Erorr deleting member');
}