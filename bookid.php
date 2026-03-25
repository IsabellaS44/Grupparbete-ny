<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body style="background:#273030; color:white;">

    <?php
    // Databasanslutning
    $conn = new mysqli("localhost", "root", "", "wisdoom");

    // Bild per id
    $image_map = array(
        1 => 'assets/images/books/bok5.png',
        2 => 'assets/images/books/bok10.png',
        3 => 'assets/images/books/bok7.png',
        4 => 'assets/images/books/bok3.png',
        5 => 'assets/images/documentary/doc6.png',
        6 => 'assets/images/documentary/doc2.png',
        7 => 'assets/images/documentary/doc5.png',
        8 => 'assets/images/documentary/doc4.png',
        9 => 'assets/images/articles/art1.png',
        10 => 'assets/images/articles/art2.png',
        11 => 'assets/images/articles/art3.png',
        12 => 'assets/images/articles/art4.png',
        13 => 'assets/images/documentary/doc7.png',
        14 => 'assets/images/books/bok11.png'
    );

    $id = $_GET['id'];

    // Aktiv bild
    $selected_image = isset($image_map[$id]) ? $image_map[$id] : 'assets/images/books/bok5.png';

    // Hämta post
    $sql = "SELECT * FROM books WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // Knapp- och rolltext utifrån typ
    $normalized_type = strtolower(trim((string)($row['type'] ?? '')));

    $creator_label = 'Författare';
    if ($normalized_type === 'dokumentär') {
        $creator_label = 'Regissör';
    }

    $button_label = 'Läs boken';
    if ($normalized_type === 'dokumentär') {
        $button_label = 'Titta på';
    } elseif ($normalized_type === 'artikel') {
        $button_label = 'Läs artikeln';
    }
    ?>

    <!DOCTYPE html>
    <html lang="sv">

    <head>
        <meta charset="UTF-8">
        <title><?php echo $row['title']; ?></title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body class="header-page" style="background:#273030; color:white;">

        <?php include 'assets/includes/header.php'; ?>

        <!-- Bokinnehåll -->
        <div class="book-detail-wrapper">
            <div class="book-detail-container">
                <!-- Omslag -->
                <div class="book-cover-section">
                    <div class="book-cover-image">
                        <img
                            src="<?php echo $selected_image; ?>"
                            alt="<?php echo $row['title']; ?>"
                            class="book-cover">
                    </div>
                </div>

                <!-- Detaljer -->
                <div class="book-info-section">
                    <h1 class="book-title"><?php echo $row['title']; ?></h1>

                    <!-- Metadata -->
                    <div class="book-metadata">
                        <div class="metadata-item">
                            <span class="metadata-label"><?php echo $creator_label; ?>:</span>
                            <span class="metadata-value"><?php echo isset($row['creator']) ? $row['creator'] : 'Okänd'; ?></span>
                        </div>
                        <div class="metadata-item">
                            <span class="metadata-label">Genre:</span>
                            <span class="metadata-value"><?php echo isset($row['genre']) ? $row['genre'] : 'Allmänt'; ?></span>
                        </div>
                    </div>

                    <p class="book-description"><?php echo $row['description']; ?></p>

                    <!-- Åtgärd -->
                    <button type="button" class="btn-read">
                        <?php echo $button_label; ?>
                    </button>
                </div>
            </div>
        </div>

        <?php include 'assets/includes/footer.php'; ?>

    </body>

    </html>