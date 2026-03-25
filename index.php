<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wisdoom</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Fontawesome CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="index-page">
  <!-- Navmenu -->
  <header>
    <nav class="navbar navbar-expand-md p-3 px-5">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img src="assets/images/branding/Wisdoom.png" alt="Wisdoom Logo" width="170">
        </a>
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active fw-bold">Startsida</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="articles.php">Artiklar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="docs.php">Dokumentärer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="books.php">Böcker</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">Om oss</a>
          </li>
        </ul>
        <form class="d-flex ms-3">
          <input type="search" class="form-control me-2 rounded-pill w-75" placeholder="Sök" aria-label="Sök...">
          <button type="submit" class="btn btn-dark">Sök</button>
        </form>
        <?php
        // Check if user is logged in
        if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
          // Shows logout button if user is logged in
          echo '
                    <a href="logout.php" class="btn btn-dark ms-2">
                    <i class="fa-solid fa-right-from-bracket"></i>Logga ut
                    </a>
                    ';
        } else {
          // Shows login button if user is not logged in
          echo '
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="btn btn-dark ms-2 dropdown-toggle" data-bs-toggle="dropdown">
                            Logga in
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" style="width: 300px">
                            <form action="index.php" method="post" class="px-4 py-3">
                                <div class="mb-3">
                                    <label for="email" class="form-label">E-post</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Lösenord</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <button type="submit" class="btn btn-secondary" name="login">Logga in</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Glömt lösenord?</a>
                            <a class="dropdown-item" href="register.php">Skapa konto</a>
                        </div>
                    </li>
                </ul>
                ';
        }
        ?>
      </div>
    </nav>
  </header>

  </head>

  <body>
    <main>
      <!-- Toppkarusell -->
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="bookid.php?id=13" class="d-block" aria-label="Gå till id 13">
              <img src="assets/images/carousel/carouseldok2.jpg" class="carouselimg" alt="Carousel documentary ad">
            </a>
          </div>
          <div class="carousel-item">
            <a href="bookid.php?id=14" class="d-block" aria-label="Gå till id 14">
              <img src="assets/images/carousel/carouselbok3.jpg" class="carouselimg" alt="Carousel book ad">
            </a>
          </div>
          <div class="carousel-item">
            <a href="artiklar.php" class="d-block" aria-label="Gå till artiklar">
              <img src="assets/images/carousel/carouselart4.jpg" class="carouselimg" alt="Carousel article ad">
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </main>

    <!-- Kategorier -->
    <section class="container mt-5 categories-layout">

      <!-- Böcker -->
      <div class="category-section">
        <h2 class="section-heading category-title"><a href="books.php" class="text-decoration-none text-reset">Böcker <span class="heading-hint">Visa alla →</span></a></h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <a href="bookid.php?id=1" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/books/bok5.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Naturens mysterier</h5>
                  <p class="card-text">En bok om naturens fascinerande fenomen och de komplexa ekosystem som formar livet på jorden.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=2" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/books/bok10.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Revolutionary Science</h5>
                  <p class="card-text">En historisk genomgång av idéer och upptäckter som förändrat vår förståelse av världen.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=3" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/books/bok7.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Archaeology and Discovery</h5>
                  <p class="card-text">En introduktion till arkeologiska fynd som avslöjar historien om mänskliga civilisationer.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=4" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/books/bok3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Stora upptäckter som förändrade världen</h5>
                  <p class="card-text">En bok om de viktigaste vetenskapliga upptäckterna och hur de har påverkat samhället.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="section-divider" aria-hidden="true"></div>

      <!-- Dokumentärer -->
      <div class="category-section">
        <h2 class="section-heading category-title"><a href="docs.php" class="text-decoration-none text-reset">Dokumentärer <span class="heading-hint">Visa alla →</span></a></h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <a href="bookid.php?id=5" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/documentary/doc6.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Realm of the Grizzly</h5>
                  <p class="card-text">En dokumentär om grizzlybjörnens liv, beteende och överlevnad.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=6" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/documentary/doc2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Visions of Earth</h5>
                  <p class="card-text">En visuell resa genom jordens mest spektakulära landskap och ekosystem, från täta regnskogar till vidsträckta öknar.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=7" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/documentary/doc5.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ancient Mysteries</h5>
                  <p class="card-text">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=8" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/documentary/doc4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ocean Giants</h5>
                  <p class="card-text">En dokumentär om världens största havsdjur och livet i de djupaste delarna av oceanerna.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="section-divider" aria-hidden="true"></div>

      <!-- Artiklar -->
      <div class="category-section">
        <h2 class="section-heading category-title"><a href="articles.php" class="text-decoration-none text-reset">Artiklar <span class="heading-hint">Visa alla →</span></a></h2>
        <div class="row row-cols-1 row-cols-md-4 g-4">
          <div class="col">
            <a href="bookid.php?id=9" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Molecular Biology</h5>
                  <p class="card-text">En genomgång av nya upptäckter inom molekylärbiologi och hur genetiska strukturer påverkar cellers funktion och utveckling.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=10" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Microbiological Research</h5>
                  <p class="card-text">Artikeln undersöker mikroorganismer och deras betydelse för sjukdomar, ekosystem och medicinsk forskning.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=11" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Data Science & AI</h5>
                  <p class="card-text">En analys av hur artificiell intelligens och dataanalys används inom forskning och teknisk utveckling.</p>
                </div>
              </div>
            </a>
          </div>
          <div class="col">
            <a href="bookid.php?id=12" class="text-decoration-none text-reset d-block h-100">
              <div class="card h-100">
                <img src="assets/images/articles/art4.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Climate & Environmental Science</h5>
                  <p class="card-text">En studie av globala klimatförändringar och de vetenskapliga insatser som görs för en mer hållbar framtid.</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section>

    <!-- Footer -->
    <footer class="footer-brown text-white py-3">
      <div class="container d-flex jusitfy-content-between align-items-center">
        <p class="mb-0">&copy; 2026 Wisdoom.</p>
        <div>
          <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon"><i class="fab fa-square-linkedin"></i></a>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>

</html>