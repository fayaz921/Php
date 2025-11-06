<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>
<body>
    <h1>Update Page</h1>
    <?php
    include_once "taskdb.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Always check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $age = $_POST['age'];
            $city = $_POST['city'];
            $address = $_POST['address'];

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
                echo "Record updated successfully.";
                // header("Location: tasktable.php");
                exit;
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
    }
    ?>
</body>
</html>
