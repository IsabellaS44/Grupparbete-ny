<?php
if (isset($_POST['register'])) {
    // Create query
    $sql = '
    INSERT INTO users (firstname, lastname, email, password, regdate)
    VALUES (:firstname, :lastname, :email, :password, NOW())
    ';
    // Prepare query
    $stmt = $dbh->prepare($sql);

    //Connects form with db container
    $stmt->bindValue(':firstname', $_POST['firstname']);
    $stmt->bindValue(':lastname', $_POST['lastname']);
    $stmt->bindValue(':email', $_POST['email']);
    $stmt->bindValue(':password', $_POST['password']);

    //Sends query to database
    try {
        $stmt->execute();
        header('Location: register.php?action=success');
        exit();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
