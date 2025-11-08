<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
  <?php
  include_once "./layout/header.php"
  ?>
  <form class="row gy-2 gx-3 align-items-center" method="POST" action="student.php">
    <div class="col-auto">
      <label for="student-name">Name</label>
      <input type="text" class="form-control" id="student-name" name="student-name" placeholder="M Fayaz">
    </div>
    <div class="col-auto">
      <label for="fname">Fname</label>
      <div class="input-group">
        <div class="input-group-text">@</div>
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Username">
      </div>
    </div>

    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>