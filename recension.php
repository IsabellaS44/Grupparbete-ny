<?php
//start session to be able to use session variables for user id when inserting review to database
session_start();
//Show errors for debugging
require_once 'assets/includes/display_errors.php';
//Include database connection
require_once 'assets/config/db.php';
//Register information to database
require_once 'assets/functions/insert.php';
//Include header

?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="utf-8">
  <title>Wisdoom</title>
  <!-- Unified CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="header-page">
  <?php include 'assets/includes/header.php'; ?>
  <main>
    <?php
    if (isset($_GET['action'])) {
      switch ($_GET['action']) {
        case 'success':
          echo '
                 <div class="alert alert-success" role="alert">
                    Din recension har skickats in!
                 </div>';
          break;
        case 'error':
          echo '
                 <div class="alert alert-danger" role="alert">
                    Det gick inte att skicka in din recension, försök igen!
                 </div>';
          break;
      }
    }
    ?>
    <!-- Book information -->
    <section class="Bok container py-6 mb-6">
      <div class="card mb-4">
        <div class="row g-0">
          <div class="col-md-1">
            <img src="assets/images/books/bok1.png" class="img-fluid rounded-start" alt="Världens historia från antiken till idag">
          </div>
          <div class="col-md-11">
            <div class="card-body">
              <h1 class="card-title">Världens Historia - från antiken till idag</h1>
              <p class="card-text">Information om boken</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Review form -->
    <section class="Recension container py-5 mb-5">
      <form action="recension.php" method="post">
        <div class="review-card p-4">
          <h2 class="mb-4">Recension</h2>
          <div class="d-flex align-items-center gap-3 mb-4">
            <!-- Stars for rating(non functional) -->
            <div class="text-warning fs-2">
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="mb-0">Välj din rating</p>
          </div>
          <div class="mb-4">
            <input type="text" class="form-control" id="review_title" placeholder="Titel på recension" name="review_title" required>
            <p class="text-sm-end">Max 70 ord</p>
          </div>
          <div class="mb-4">
            <textarea class="form-control" placeholder="Din recension" id="review_content" style="height: 400px" name="review_content" required></textarea>
            <p class="text-sm-end">Max 500 ord</p>
          </div>
          <div class="d-flex justify-content-end my-2">
            <button type="reset" class="btn btn-danger mx-4" name="avbryt">Avbryt</button>
            <button type="submit" class="btn btn-success" name="dela">Dela</button>
          </div>
        </div>
      </form>
    </section>
  </main>
</body>
</html>