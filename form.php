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
    include_once "Layout/header.php";
    ?>
    <div class="container">
        <div class="row p-5">
            <div class="col-lg-6">
                Form text
            </div>
            <div class="col-lg-6">
                <?php
                $emailErr = $passErr = $addressErr = "";
                $email = $pass = $address = "";

                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if (empty($_POST['email'])) {
                        $emailErr = "Please Enter Valid Email";
                    } else {
                        $email = $_POST['email'];
                    }
                    if (empty($_POST['password'])) {
                        $passErr = "Please Enter  password";
                    } else {
                        $pass = $_POST['password'];
                    }
                    if (empty($_POST['address'])) {
                        $addressErr = "Please Enter  address";
                    } else {
                        $address = $_POST['address'];
                    }
                }
                ?>
                <form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                        
                        <span class="text-danger">
                            <?php
                            echo $emailErr
                            ?>
                        </span>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        
                         <span class="text-danger">
                            <?php
                            echo $passErr
                            ?>
                        </span>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                         <span class="text-danger">
                            <?php
                            echo $addressErr
                            ?>
                        </span>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
                <?php
                echo "Your Email is :$email<br>";
                echo "Your password is :$pass <br>";
                echo "Your address is :$address<br>";
                ?>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>