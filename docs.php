<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Wisdoom</title>
    <!-- Unified CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="docs-page header-page">
    <?php include 'assets/includes/header.php'; ?>
    <main>

        <!-- Hero section -->
        <section class="hero text-center articles-hero">
            <h1 class="articles-hero-title">
                <p class="text-white">Populära dokumentärer</p>
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

                            <img src="assets/images/documentary/doc2.png" alt="bild på dok n.1" class="article-img-large">
                            <p class="articles-card-text">En visuell resa genom jordens mest spektakulära landskap och ekosystem, från täta regnskogar till vidsträckta öknar.</p>
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

                            <img src="assets/images/documentary/doc5.png" alt="bild på dok n.2" class="article-img-large">
                            <p class="articles-card-text">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>3:</h4>
                                <img src="assets/images/documentary/doc1.png" alt="bild på dok n.3" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En resa genom Afrikas savanner och djurliv, där naturens balans och överlevnad står i fokus.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>4:</h4>
                                <img src="assets/images/documentary/doc4.png" alt="bild på dok n.4" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En dokumentär om världens största havsdjur och livet i de djupaste delarna av oceanerna.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>5:</h4>
                                <img src="assets/images/documentary/doc3.png" alt="bild på dok n.5" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">Hur forskning och livsstil förändrar vår syn på hälsa och formar framtidens medicin.</div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="feature-card feature-card-small">
                            <div class="myDIV articles-small-header">
                                <h4>6:</h4>
                                <img src="assets/images/documentary/doc6.png" alt="bild på dok n.6" class="article-img-small">
                            </div>
                            <div class="hide articles-hide-text">En dokumentär om grizzlybjörnens liv, beteende och överlevnad.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

        <!--Valda dokumentären-->
        <section class="articles-featured-section">
            <div class="container-lg">
                <div class="articles-featured-card">
                    <img src="assets/images/documentary/doc5.png" alt="bild på dok n.2" class="articles-featured-img">
                    <div class="articles-featured-content">
                        <div class="text-warning articles-featured-stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <h2 class="articles-featured-title">Ancient Mysteries</h2>
                        <p class="articles-featured-author">by; Rick Wilkinson</p>

                        <div class="articles-featured-buttons">
                            <button type="button" class="btn btn-outline-secondary">
                                <p class="text-danger-emphasis mb-0"><u>Läs bok</u><i class="fa-brands fa-leanpub fa-xl ms-2"></i></p>
                            </button>
                            <button type="button" class="btn btn-outline-secondary">
                                <p class="text-danger-emphasis mb-0"><u>Lyssna på bok</u><i class="fa-solid fa-volume-high fa-xl ms-2"></i></p>
                            </button>
                        </div>

                        <p class="articles-featured-description">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="section-divider" aria-hidden="true"></div>

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
                    <p class="fw-bold mb-0">Simon Åberg</p>
                    <div class="text-warning">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <p>Snyggt producerad och lätt att följa. Perfekt kvällsunderhållning.</p>

                    <p class="text-muted mb-1">11 mars 2026</p>
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
                        <p class="fw-bold mb-0">Anton Håkansson</p>
                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>Intressant, men vissa teorier kändes lite väl spekulativa.</p>

                        <p class="text-muted mb-1">1 mars 2026</p>
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
                        <p class="fw-bold mb-0">Felicia Norén</p>

                        <div class="text-warning mb-2">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>

                        <p>Bra tempo och fina miljöer, men kunde varit mer faktabaserad.</p>

                        <p class="text-muted mb-1">24 feb 2026</p>
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