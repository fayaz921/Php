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
    include_once "TaskLayout/tasklayout.php";
    include_once "TaskLayout/taskheader.php";
    include_once "taskdb.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $address = $_POST['address'];

        $sql = "INSERT INTO students (firstname, lastname, email, password, age, city, address)
        VALUES ('$firstname', '$lastname', '$email', '$password', '$age', '$city', '$address')";

        if ($conn->query($sql) === TRUE) {
            echo "<div class='alert alert-success text-center'>Student Registered Successfully</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: " . $conn->error . "</div>";
        }

        $conn->close();
    }
    ?>

    <div class="container">
        <form class="row g-3 p-4" method="POST" action="">
            <div class="col-md-6">
                <label for="firstname" class="form-label">FirstName</label>
                <input type="text" class="form-control" name="firstname" id="firstname" required>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">LastName</label>
                <input type="text" class="form-control" name="lastname" id="lastname" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age" required>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="city" required>
            </div>

            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
            </div>


            <div class="col-12 justify-content-center align-items-center d-flex">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>
    </div>
 
    <?php
    include_once "TaskLayout/taskfooter.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>