<?php
//start session to be able to use session variables for user id when inserting review to database
session_start();
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
//Review submission

// Checks whether the submit button has been pressed
if (isset($_POST['dela'])) {

//cheks if user is logged in before allowing user to submit review, if not shows error message and redirects user to index.php
if (!isset($_SESSION['user_id'])) {
  header('Location: ../../index.php');
  exit();
}  
// Creates a query
$sql = '
INSERT INTO reviews (user_id, review_title, review_content, created_at)
VALUES (:user_id, :review_title, :review_content, NOW())
';

// Prepares a query
$stmt = $dbh->prepare($sql);

// Connects form fields with db containers
$stmt->bindValue(':user_id', $_SESSION['user_id']);
$stmt->bindValue(':review_title', $_POST['review_title']);
$stmt->bindValue(':review_content', $_POST['review_content']);

// Sends query to database
if ($stmt->execute()) {
header('Location: ../../recension.php?action=success');
exit();
} else {
header('Location: ../../recension.php?action=error');
exit();
}
}  