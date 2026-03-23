<?php
// Checks whether the review submission button has been pressed
if (isset($_POST['dela'])) {
// Creates a query
$sql = '
INSERT INTO Reviews (user_id, review_title, review_content, created_at)
VALUES (0, :review_title, :review_content, NOW())
';

// Prepares a query
$stmt = $dbh->prepare($sql);

// Connects form fields with db containers
$stmt->bindValue(':review_title', $_POST['review_title']);
$stmt->bindValue(':review_content', $_POST['review_content']);

// Sends query to database
if ($stmt->execute()) {
header('Location: ../../recension.php?action=success');
exit();
}
}