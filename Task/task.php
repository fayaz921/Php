<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add / Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    include_once "TaskLayout/tasklayout.php";
    include_once "TaskLayout/taskheader.php";
    include_once "taskdb.php";

    // Initialize variables (to use for prefilling form)
    $id = "";
    $firstname = "";
    $lastname = "";
    $email = "";
    $password = "";
    $age = "";
    $city = "";
    $address = "";
    $isUpdate = false;

    // --- Check if ID is in URL (means update mode) ---
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $isUpdate = true;

        // Fetch existing record
        $result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $age = $row['age'];
            $city = $row['city'];
            $address = $row['address'];
        }
    }

    // --- Handle form submission ---
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $city = $_POST['city'];
        $address = $_POST['address'];

        if ($isUpdate) {
            // Update record
            $sql = "UPDATE students 
                    SET firstname='$firstname',
                        lastname='$lastname',
                        email='$email',
                        password='$password',
                        age='$age',
                        city='$city',
                        address='$address'
                    WHERE id=$id";
            $update = mysqli_query($conn, $sql);

            if ($update) {
                echo "<div class='alert alert-success text-center'>Record Updated Successfully!</div>";
                header('location: tasktable.php');
            } else {
                echo "<div class='alert alert-danger text-center'>Error Updating Record: " . mysqli_error($conn) . "</div>";
            }
        } else {
            // Insert record
            $sql = "INSERT INTO students (firstname, lastname, email, password, age, city, address)
                    VALUES ('$firstname', '$lastname', '$email', '$password', '$age', '$city', '$address')";
            $insert = mysqli_query($conn, $sql);

            if ($insert) {
                echo "<div class='alert alert-success text-center'>Student Added Successfully!</div>";
            } else {
                echo "<div class='alert alert-danger text-center'>Error Inserting Record: " . mysqli_error($conn) . "</div>";
            }
        }
    }
    ?>

    <div class="container mt-4">
        <h2 class="text-center mb-4">
            <?php echo $isUpdate ? "Update Student" : "Add New Student"; ?>
        </h2>

        <form class="row g-3 p-4 border rounded bg-light shadow" method="POST" action="">
            <div class="col-md-6">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname"
                       value="<?php echo $firstname; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname"
                       value="<?php echo $lastname; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                       value="<?php echo $email; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password"
                       value="<?php echo $password; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age"
                       value="<?php echo $age; ?>" required>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" name="city" id="city"
                       value="<?php echo $city; ?>" required>
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" name="address" id="address"
                       value="<?php echo $address; ?>" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary px-4">
                    <?php echo $isUpdate ? "Update" : "Submit"; ?>
                </button>
            </div>
        </form>
    </div>

    <?php
    include_once "TaskLayout/taskfooter.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
