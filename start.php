<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

</head>

<body>


<header>

  <!-- ÖVRE RAD -->
  <div class="py-3" style="background-color: #9E430B;">
<div class="container-fluid d-flex justify-content-between align-items-center px-4 mt-3">

      <!-- LOGGA -->
     <img src="assets/css/bootstrap-5.3.8-dist/images/Wisdoom PNG.png" alt="Logotyp" style="height: 50px;">

 <!-- LOG & REG -->
<div class="d-flex gap-2">
  <button class="btn btn-dark">
    Logga in
  </button>
  <button class="btn btn-dark">
    Registrera dig
  </button>
</div>

    </div>
  </div>


  <!-- UNDRE RAD -->
  <div class="py-3" style="background-color: #273030;">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">

      <!-- SÖKFÄLT -->
      <input type="text" class="form-control w-50"
             placeholder="Sök..."
             style="border-radius:20px;">

      <!-- NAVIGATION -->
      <div class="d-flex gap-3">
        <a href="#" class="btn btn-dark px-4 py-2">Artiklar</a>
        <a href="#" class="btn btn-dark px-4 py-2">Dokumentärer</a>
        <a href="#" class="btn btn-dark px-4 py-2">Böcker</a>
        <a href="about.php" class="btn btn-dark px-4 py-2">Om oss</a>
      </div>

    </div>
  </div>

</header>

<main>
  <!-- CAROUSEL -->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="book.php?id=13" class="d-block" aria-label="Gå till id 13">
        <img src="assets/css/bootstrap-5.3.8-dist/images/carouseldok2.jpg" class="carouselimg" alt="Carousel documentary ad">
      </a>
    </div>
    <div class="carousel-item">
      <a href="book.php?id=14" class="d-block" aria-label="Gå till id 14">
        <img src="assets/css/bootstrap-5.3.8-dist/images/carouselbok3.jpg" class="carouselimg" alt="Carousel book ad">
      </a>
    </div>
    <div class="carousel-item">
      <a href="artiklar.php" class="d-block" aria-label="Gå till artiklar">
        <img src="assets/css/bootstrap-5.3.8-dist/images/carouselart4.jpg" class="carouselimg" alt="Carousel article ad">
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

<!-- KORTSEKTION -->
<section class="container mt-5">

  <!-- ROW 1 -->
  <h2 class="section-heading">Böcker <span class="heading-hint">Visa alla →</span></h2>
  <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
    <div class="col">
      <a href="book.php?id=1" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/books/bok5.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Naturens mysterier</h5>
            <p class="card-text">En bok om naturens fascinerande fenomen och de komplexa ekosystem som formar livet på jorden.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=2" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/books/bok10.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Revolutionary Science</h5>
            <p class="card-text">En historisk genomgång av idéer och upptäckter som förändrat vår förståelse av världen.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=3" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/books/bok7.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Archaeology and Discovery</h5>
            <p class="card-text">En introduktion till arkeologiska fynd som avslöjar historien om mänskliga civilisationer.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=4" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/books/bok3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Stora upptäckter som förändrade världen</h5>
            <p class="card-text">En bok om de viktigaste vetenskapliga upptäckterna och hur de har påverkat samhället.</p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- ROW 2 -->
  <h2 class="section-heading">Dokumentärer <span class="heading-hint">Visa alla →</span></h2>
  <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
    <div class="col">
      <a href="book.php?id=5" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/documentary/doc6.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Realm of the Grizzly</h5>
            <p class="card-text">En dokumentär om grizzlybjörnens liv, beteende och överlevnad.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=6" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/documentary/doc2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Visions of Earth</h5>
            <p class="card-text">En visuell resa genom jordens mest spektakulära landskap och ekosystem, från täta regnskogar till vidsträckta öknar.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=7" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/documentary/doc5.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ancient Mysteries</h5>
            <p class="card-text">En resa genom historien där arkeologiska fynd avslöjar hemligheter från gamla civilisationer.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=8" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/documentary/doc4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ocean Giants</h5>
            <p class="card-text">En dokumentär om världens största havsdjur och livet i de djupaste delarna av oceanerna.</p>
          </div>
        </div>
      </a>
    </div>
  </div>

  <!-- ROW 3 -->
  <h2 class="section-heading">Artiklar <span class="heading-hint">Visa alla →</span></h2>
  <div class="row row-cols-1 row-cols-md-4 g-4 mb-5">
    <div class="col">
      <a href="book.php?id=9" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/articles/art1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Molecular Biology</h5>
            <p class="card-text">En genomgång av nya upptäckter inom molekylärbiologi och hur genetiska strukturer påverkar cellers funktion och utveckling.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=10" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/articles/art2.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Microbiological Research</h5>
            <p class="card-text">Artikeln undersöker mikroorganismer och deras betydelse för sjukdomar, ekosystem och medicinsk forskning.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=11" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/articles/art3.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Data Science & AI</h5>
            <p class="card-text">En analys av hur artificiell intelligens och dataanalys används inom forskning och teknisk utveckling.</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col">
      <a href="book.php?id=12" class="text-decoration-none text-reset d-block h-100">
        <div class="card h-100">
          <img src="assets/css/bootstrap-5.3.8-dist/images/articles/art4.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Climate & Environmental Science</h5>
            <p class="card-text">En studie av globala klimatförändringar och de vetenskapliga insatser som görs för en mer hållbar framtid.</p>
          </div>
        </div>
      </a>
    </div>
  </div>

  
</section>

  <!-- Bootstrap JS for carousel and interactive components -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
