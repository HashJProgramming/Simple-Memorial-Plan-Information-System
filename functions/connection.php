<!-- Developer: Hash'J ❤️ Programming -->
<?php
    $database = 'stpeter';
    $db = new PDO('mysql:host=localhost', 'root', '');
    $query = "CREATE DATABASE IF NOT EXISTS $database";
    try {
        $db->exec($query);
        $db->exec("USE $database");

        $db->exec("
            CREATE TABLE IF NOT EXISTS `users` (
              id INT PRIMARY KEY AUTO_INCREMENT,
              username VARCHAR(255),
              password VARCHAR(255),
              created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS `members` (
              id INT PRIMARY KEY AUTO_INCREMENT,
              fullname VARCHAR(255),
              plan VARCHAR(255),
              bdate DATE,
              address VARCHAR(255),
              gender VARCHAR(6),
              photo VARCHAR(266),
              created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS `gallery` (
              id INT PRIMARY KEY AUTO_INCREMENT,
              photo VARCHAR(266),
              created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");

        $db->exec("
            CREATE TABLE IF NOT EXISTS `videos` (
              id INT PRIMARY KEY AUTO_INCREMENT,
              title VARCHAR(266),
              description VARCHAR(266),
              video VARCHAR(266),
              created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )
        ");
        

        $db->beginTransaction();
        $stmt = $db->prepare("SELECT COUNT(*) FROM `users` WHERE `username` = 'admin'");
        $stmt->execute();
        $userExists = $stmt->fetchColumn();
        
        if (!$userExists) {
            $stmt = $db->prepare("INSERT INTO `users` (`username`, `password`) VALUES (:username, :password)");
            $stmt->bindValue(':username', 'admin');
            $stmt->bindValue(':password', 'admin');
            $stmt->execute();
        }
        
        $db->commit();

    } catch(PDOException $e) {
        die("Error creating database: " . $e->getMessage());
    }
    $db = new PDO("mysql:host=localhost;dbname=$database", "root", "");
?>