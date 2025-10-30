<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['pwd']) && $_SESSION['pwd'] != '') {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XTREME PASSWORD GENERATOR</title>
  </head>

  <body class="bg-secondary">
    <div class="container bg-dark text-danger p-3">
      <div class="row">
        <div class="col-12">
          <?php include './header.php' ?>

        </div>
        <div class="col-12">
          <div class="card mt-3">
            <div class="card-header text-center bg-primary text-white">
              <h2>Generate your super password</h2>
              <h6>session : <?php echo $_SESSION['name'] ?></h6>
            </div>
            <div class="card-body">
              <h3 class="text-center text-success">Your generated password is:</h3>
              <p class="text-center display-4 text-warning"><?php echo $_SESSION['pwd'] ?></p>
              <div class="d-flex justify-content-center">
                <a href="./index.php" class="btn btn-primary">Generate another password</a>
              </div>
            </div>
          </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <script src="./js/script.js"></script>

  </body>

  </html>
<?php
} else {
  header('Location: index.php');
}
