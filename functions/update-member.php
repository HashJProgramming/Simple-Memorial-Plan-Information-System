<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');
if(isset($_POST['id']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['plan']) && isset($_POST['bdate']) && isset($_POST['address'])){
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $fullname = $fname . ' ' . $lname;
    $plan = $_POST['plan'];
    $bdate = $_POST['bdate'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $target_dir = "photos/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
    
    $stmt = $db->prepare("UPDATE `members` SET `fullname` = :fullname, `plan` = :plan, `bdate` = :bdate, `address` = :address, `gender` = :gender, `photo` = :photo WHERE `id` = :id");
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':fullname', $fullname);
    $stmt->bindValue(':plan', $plan);
    $stmt->bindValue(':bdate', $bdate);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':gender', $gender);
    $stmt->bindValue(':photo', $target_file);
    $stmt->execute();
    header('Location: ../index.php?type=success&message=Member updated successfully.');
} else{
    
    header('location: ../index.php?type=error&message=Please fill up all fields');
}