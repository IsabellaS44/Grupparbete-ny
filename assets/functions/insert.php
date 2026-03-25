<?php
// Checks whether the review submission button has been pressed
if (isset($_POST['dela'])) {
// Checks if the user is logged in, if not redirects to login page
if (!isset($_SESSION['user_id'])) {
header('Location: ../../login.php?action=notloggedin');
exit();
}
// Creates a query
$sql = '
INSERT INTO Reviews (user_id, review_title, review_content, created_at)
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
}
}