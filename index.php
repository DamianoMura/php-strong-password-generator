<?php
include './wizard.php';
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
            <form action="./index.php">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <label for="pwd-lenght" class="form-label">password lenght <span id="label-length"><?php echo $length ?></span> charachters</label>
                    <div class="d-flex">
                      <span class="px-1">7</span> <input type="range" class="form-range" min="7" max="16" step="1" id="pwd-length" name="pwd-length" value="<?php echo $length; ?>"><span class="px-1">16</span>

                    </div>

                  </div>
                  <div class="col-12">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="repeat-char" value="true" name="repeat-char"
                        <?php if ($repeat) {
                          echo 'checked';
                        } ?>>
                      <label class="form-check-label" for="switchCheckDefault" name="repeat-char">consenti ripetizioni di caratteri </label>
                    </div>

                  </div>
                  <div class="col-12  d-flex justify-content-center align-items-center flex-column">
                    <div class="btn-group my-3" role="group" aria-label="Select Chars to compose your password!!!">
                      <input type="checkbox" class="btn-check" id="letters" autocomplete="off" value="true" name="letters"
                        <?php
                        if ($letters) {
                          echo 'checked';
                        }
                        ?>>
                      <label class="btn btn-outline-primary" for="letters">Letters</label>

                      <input type="checkbox" class="btn-check" id="numbers" autocomplete="off" value="true" name="numbers"
                        <?php
                        if ($numbers) {
                          echo 'checked';
                        }
                        ?>>
                      <label class="btn btn-outline-primary" for="numbers">Numbers</label>

                      <input type="checkbox" class="btn-check" id="special" autocomplete="off" value="true" name="special"
                        <?php
                        if ($special) {
                          echo 'checked';
                        }
                        ?>>
                      <label class=" btn btn-outline-primary" for="special">Special Characters</label>
                    </div>
                  </div>
                  <div class="col-12 text-center mt-3">
                    <button type="submit" class="btn btn-success">GENERA PASSWORD</button>


                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      <script src="./js/script.js"></script>

</body>

</html>