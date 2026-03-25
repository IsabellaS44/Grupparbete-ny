<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Wisdoom</title>
    <!-- Unified CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="articles-page header-page">
    <?php include 'assets/includes/header.php'; ?>
    <main>

        <!-- Hero sektion -->
        <section class="hero text-center articles-hero">
            <h1 class="articles-hero-title">
                <p class="text-white">Populära artiklar</p>
            </h1>
            <h3 class="articles-hero-subtitle">
                <p class="text-white">Topplistan just nu!</p>
            </h3>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

        <!-- Topp 2 rutorna -->
        <section class="articles-top-section">
            <div class="container-lg">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="feature-card feature-card-large">
                            <div class="text-warning articles-stars">
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                            </div>

                            <img src="assets/images/articles/art1.png" alt="bild på artikel n.1" class="article-img-large">
                            <p class="articles-card-text">En genomgång av nya upptäckter inom molekylärbiologi och hur genetiska strukturer påverkar cellers funktion och utveckling.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-card feature-card-large">
                            <div class="text-warning articles-stars">
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                                <i class="fa-solid fa-star fa-xl"></i>
                            </div>

                            <img src="assets/images/articles/art2.png" alt="bild på artikel n.2" class="article-img-large">
                            <p class="articles-card-text">Artikeln undersöker mikroorganismer och deras betydelse för sjukdomar, ekosystem och medicinsk forskning.</p>
                        </div>
                    </div>

                    <!-- Topp 3-6 rutorna -->
                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>3:</h4>
                                <img src="assets/images/articles/art3.png" alt="bild på artikel n.3" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En analys av hur artificiell intelligens och dataanalys används inom forskning och teknisk utveckling.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>4:</h4>
                                <img src="assets/images/articles/art4.png" alt="bild på artikel n.4" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En studie av globala klimatförändringar och de vetenskapliga insatser som görs för en mer hållbar framtid.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>5:</h4>
                                <img src="assets/images/articles/art5.png" alt="bild på artikel n.5" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En översikt av nya tekniska innovationer och hur fysikens principer används i modern ingenjörskonst.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>6:</h4>
                                <img src="assets/images/articles/art6.png" alt="bild på artikel n.6" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En genomgång av avancerade material och deras roll inom nanoteknik och framtidens teknologi.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

        <!--Valda artikeln-->
        <section class="articles-featured-section">
            <div class="container-lg">
                <div class="articles-featured-card">
                    <img src="assets/images/articles/art1.png" alt="bild på artikel n.1" class="articles-featured-img">
                    <div class="articles-featured-content">
                        <div class="text-warning articles-featured-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2 class="articles-featured-title">Molecular Biology</h2>
                        <p class="articles-featured-author">by; Jacob Lawrence</p>

                        <!-- Lyssna/ läs-knapparna -->
                        <div class="articles-featured-buttons">
                            <button type="button" class="btn btn-outline-secondary">
                                <p class="text-danger-emphasis mb-0"><u>Läs bok</u><i class="fa-brands fa-leanpub fa-xl ms-2"></i></p>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <p class="text-danger-emphasis mb-0"><u>Lyssna på bok</u><i class="fa-solid fa-volume-high fa-xl ms-2"></i></p>
                            </button>
                        </div>

                        <p class="articles-featured-description">En genomgång av nya upptäckter inom molekylärbiologi och hur genetiska strukturer påverkar cellers funktion och utveckling.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial section-->
        <section class="container mt-4">
            <h2>
                <p class="text-white text-left text-sucess mt-5">Recensioner</p>
            </h2>
            <section>
                <div class="d-flex flex-row">
                    <div class="p-2">
                        <p class="shadow text-white"><i class="fa-solid fa-plus"></i><u>Skapa recension</u>
                    </div>
                    </p>
                </div>
            </section>

            <!-- Recension -->
            <div class="row g-4">
                <div class="card-b mb-3">
                    <i class="fa-solid fa-circle-user fa-xl"></i>
                    <p class="fw-bold mb-0">Emma Lundqvist</p>
                    <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Superintressant! Gillade verkligen hur allt förklarades på ett tydligt sätt utan att bli för simpelt.</p>

                    <p class="text-muted mb-1">12 mars 2026</p>
                    <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                        <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                    </p>
                </div>
            </div>
            </div>
        </section>

        <!-- Likea & Kommentera -->
        <section>
            <div class="container">
                <div class="row g-4 mb-3">
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <p class="shadow text-white">Kommentera <i class="fa-solid fa-comments"></i>
                        </div>
                        </p>
                        <div class="p-2">
                            <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        </p>
                    </div>
                </div>
        </section>

        <!-- Recension -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="card-b mb-3">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                        <p class="fw-bold mb-0">Johan Bergström</p>
                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>Bra läsning, känns väldigt aktuell. Hade dock velat ha fler exempel från verkligheten.</p>

                        <p class="text-muted mb-1">8 mars 2026</p>
                        <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                            <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                        </p>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- Likea & Kommentera -->
        <section>
            <div class="container">
                <div class="row g-4 mb-3">
                    <div class="d-flex flex-row-reverse">
                        <div class="p-2">
                            <p class="shadow text-white">Kommentera <i class="fa-solid fa-comments"></i>
                        </div>
                        </p>
                        <div class="p-2">
                            <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i>
                        </div>
                        </p>
                    </div>
                </div>
        </section>

        <!-- Recension -->
        <section>
            <div class="container">
                <div class="row g-4">
                    <div class="card-b mb-3">
                        <i class="fa-solid fa-circle-user fa-xl"></i>
                        <p class="fw-bold mb-0">Sara Nilsson</p>

                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>En av de bättre artiklarna jag läst inom ämnet. Lärde mig mycket nytt.</p>

                        <p class="text-muted mb-1">2 mars 2026</p>
                        <p class="text-danger-emphasis mb-1"><u>Redigera</u><i class="fa-regular fa-pen-to-square"></i>
                            <u>Radera</u><i class="fa-regular fa-trash-can"></i>
                        </p>

        </section>

        <!-- Likea & Kommentera -->
        <section>
            <div class="container">
                <div class="d-flex flex-row-reverse">
                    <div class="p-2">
                        <p class="shadow text-white">Kommentera<i class="fa-solid fa-comments"></i>
                    </div>
                    </p>
                    <div class="p-2">
                        <p class="shadow text-white">Likea<i class="fa-solid fa-thumbs-up"></i>
                    </div>
                    </p>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>

    </main>

    <?php include 'assets/includes/footer.php'; ?>

</body>

</html>