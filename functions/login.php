<!-- Developer: Hash'J ❤️ Programming -->
<?php
include_once('connection.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM `users` WHERE `username` = :username AND `password` = :password");
    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch();
    if($user){
        session_start();
        $_SESSION['username'] = $username;
        if (isset($_POST['remember'])) {
            setcookie('username', $username, time() + (86400 * 30), "/");
            setcookie('password', $password, time() + (86400 * 30), "/");
        } else {
            setcookie('username', '', time() - 3600, "/");
            setcookie('password', '', time() - 3600, "/");
        }
        header('Location: ../index.php');
    } else{
        header('location: ../login.php?type=error&message=Wrong username or password');
    }
}