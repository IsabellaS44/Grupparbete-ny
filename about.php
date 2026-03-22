<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Om oss</title>
    <!-- Bootstrap for layout and reusable UI components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

<!-- Shared header used for logo, search, and primary navigation -->
<header>
  <!-- FIRST ROW -->
  <div class="py-3" style="background-color: #9E430B;">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4 mt-3">
      <a href="start.php"><img src="assets/css/bootstrap-5.3.8-dist/images/Wisdoom PNG.png" alt="Logotyp" style="height: 50px;"></a>
      <div class="d-flex gap-2">
        <button class="btn btn-dark">Logga in</button>
        <button class="btn btn-dark">Registrera dig</button>
      </div>
    </div>
  </div>

  <!-- SECOND ROW -->
  <div class="py-3" style="background-color: #273030;">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">
      <input type="text" class="form-control w-50" placeholder="Sök..." style="border-radius:20px;">
      <div class="d-flex gap-3">
        <a href="artiklar.php" class="btn btn-dark px-4 py-2">Artiklar</a>
        <a href="#" class="btn btn-dark px-4 py-2">Dokumentärer</a>
        <a href="#" class="btn btn-dark px-4 py-2">Böcker</a>
        <a href="om-oss.php" class="btn btn-dark px-4 py-2">Om oss</a>
      </div>
    </div>
  </div>
</header>

<main class="container mt-5">

  <!-- About page content -->
  <h2 class="section-heading mb-4 text-center">Om oss</h2>

  <!-- INTRO -->
  <div class="row mb-5">
    <div class="col-md-8 mx-auto text-center">
      <p class="text-light fs-5">
       Wisdoom är en plattform som samlar kunskap på ett och samma ställe.
      </p>
      <p class="text-light">
       Här kan du söka bland artiklar, dokumentärer och böcker inom områden som vetenskap, historia, kultur och samhälle.<br>
      Vår ambition är att göra det enklare att hitta inspirerande och faktabaserat innehåll.<br>
       Användare kan även kan dela tankar, diskutera innehåll och ta del av andras perspektiv <br>
       - eftersom kunskap växer när den delas.

      </p>
    </div>
  </div>

 

  <!-- KONTAKT -->
  <h3 class="section-heading mb-4 text-center">Kontakta oss</h3>
  <div class="row mb-5">
    <div class="col-md-6 mx-auto text-center">
      <p class="text-light">Har du frågor eller vill samarbeta? Hör av dig till oss!</p>
      <p class="text-light">📧 kontakt@wisdoom.se</p>
    </div>
  </div>

</main>

<!-- Bootstrap JS bundle enables interactive components if used -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
