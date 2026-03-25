<?php
// Include display errors
require_once 'assets/css/includes/display_errors.php';
// Include database connection
require_once 'assets/css/config/db.php';
// Register information to database
require_once 'functions/insert.php';
?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Skapa konto</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/album.css">
</head>

<body>
    <main class="container py-5">
        <?php
        // Checks if an action is set
        if (isset($_GET['action'])) {
            // Checks which action is set
            switch ($_GET['action']) {
                case 'success':
                    echo '<div class="alert alert-success" role="alert">Kontot har skapats!</div>';
                    break;
            }
        }
        ?>
        <form action="register.php" method="post">
            <div class="row justify-content-center">
                <div style="width: 600px; max-width: 100%;">
                    <div class="card shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <h1 class="h3 mb-4">Skapa konto</h1>
                            <div class="mb-2">
                                <label for="firstname" class="form-label mb-1 fw-bold">Förnamn</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Förnamn">
                            </div>

                            <div class="mb-2">
                                <label for="lastname" class="form-label mb-1 fw-bold">Efternamn</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Efternamn">
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label mb-1 fw-bold">E-post</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-post">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label mb-1 fw-bold">Lösenord</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Lösenord (minst 8 tecken)">
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <a href="index.php" class="btn btn-danger">Tillbaka</a>
                                <button type="submit" name="register" class="btn btn-success" name="register">Skapa konto</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <?php
    // Include footer
    include 'assets/css/includes/footer.php';
    ?>
</body>

</html>