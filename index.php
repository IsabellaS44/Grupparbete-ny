<?php
// Include header
include 'assets/css/includes/header.php';
// Include footer
include 'assets/css/includes/footer.php';
// Include display errors
include 'assets/css/includes/display_errors.php';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <title>Min sida</title>
</head>

<body>

    <section class="pt-5">
        <div class="container text-center">
            <?php
            // Checks if actions is set
            if (isset($_GET['action'])) {

                // Checks what action is set to
                switch ($_GET['action']) {
                    case 'empty':
                        echo '
            <div class="alert alert-warning">
                Du har inte angett en e-postadress eller lösenord.
            </div>
            ';
                        break;
                    case 'error':
                        echo '
            <div class="alert alert-danger">
                Du har angett fel e-postadress eller lösenord.
            </div>
            ';
                        break;
                    case 'logout':
                        echo '
            <div class="alert alert-danger">
                Du har loggats ut.
            </div>
            ';
                        break;
                }
            }
            ?>
        </div>
    </section>

</body>

</html>