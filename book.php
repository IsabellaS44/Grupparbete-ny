<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

</head>

<body style="background:#273030; color:white;">

  <!-- Shared header and search area -->

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
   <div style="position: relative; width: 50%;">

  <!-- FORM -->
  <form method="GET">
    <input type="text" name="query" class="form-control"
           placeholder="Sök..."
           style="border-radius:20px;">
  </form>

  <!-- RESULTAT (PHP) -->
<?php
if (isset($_GET['query']) && trim($_GET['query']) !== '') {

    $search = $_GET['query'];

    // EXTRA: visa bara om längden är minst 2 tecken
    if (strlen($search) > 1) {

        // Open a temporary connection to fetch search suggestions.
        $conn = new mysqli("localhost", "root", "", "wisdom");

        $sql = "SELECT * FROM books WHERE title LIKE '%$search%' LIMIT 5";
        $result = $conn->query($sql);

        echo "<div style='
            position:absolute;
            background:#9E430B;
            color:white;
            width:100%;
            border-radius:10px;
            margin-top:5px;
            padding:10px;
            z-index:999;
        '>";

        while($row = $result->fetch_assoc()) {
            echo "<div style='padding:8px 0; border-bottom:1px solid #273030;'>";
            echo $row['title'];
            echo "</div>";
        }

        echo "</div>";
    }
}
?>

</div>

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

<?php
$conn = new mysqli("localhost", "root", "", "wisdom");

// Mapping mellan id och bildnamn
$image_map = array(
  1 => 'assets/css/bootstrap-5.3.8-dist/images/books/bok5.png',
  2 => 'assets/css/bootstrap-5.3.8-dist/images/books/bok10.png',
  3 => 'assets/css/bootstrap-5.3.8-dist/images/books/bok7.png',
  4 => 'assets/css/bootstrap-5.3.8-dist/images/books/bok3.png',
  5 => 'assets/css/bootstrap-5.3.8-dist/images/documentary/doc6.png',
  6 => 'assets/css/bootstrap-5.3.8-dist/images/documentary/doc2.png',
  7 => 'assets/css/bootstrap-5.3.8-dist/images/documentary/doc5.png',
  8 => 'assets/css/bootstrap-5.3.8-dist/images/documentary/doc4.png',
  9 => 'assets/css/bootstrap-5.3.8-dist/images/articles/art1.png',
  10 => 'assets/css/bootstrap-5.3.8-dist/images/articles/art2.png',
  11 => 'assets/css/bootstrap-5.3.8-dist/images/articles/art3.png',
  12 => 'assets/css/bootstrap-5.3.8-dist/images/articles/art4.png',
  13 => 'assets/css/bootstrap-5.3.8-dist/images/documentary/doc7.png',
  14 => 'assets/css/bootstrap-5.3.8-dist/images/books/bok11.png'
);

$id = $_GET['id'];

// Fetch the selected row from the books table.
$sql = "SELECT * FROM books WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title><?php echo $row['title']; ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background:#273030; color:white;">


<div class="container mt-5">

    <div class="row g-4 align-items-start">
      <!-- Image Section -->
      <div class="col-md-4">
        <div>
          <img
            src="<?php echo isset($image_map[$id]) ? $image_map[$id] : 'assets/css/bootstrap-5.3.8-dist/images/books/bok5.png'; ?>"
            alt="<?php echo $row['title']; ?>"
            class="img-fluid"
          >
        </div>
      </div>
      <!-- Text Section -->
      <div class="col-md-8">
        <div>
          <h1 class="mb-4"><?php echo $row['title']; ?></h1>
          <p class="lead"><?php echo $row['description']; ?></p>
          <button type="button" class="btn px-4 py-2 mt-2 text-white" style="background-color: #9E430B; border-color: #9E430B;">Läs</button>
        </div>
      </div>
    </div>

</div>

</body>
</html>