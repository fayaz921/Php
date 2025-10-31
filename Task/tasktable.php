<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>

    <?php
    include_once "TaskLayout/tasklayout.php";
    include_once "TaskLayout/taskheader.php";
    include_once "taskdb.php";
    ?>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Age</th>
                    <th scope="col">City</th>
                    <th scope="col">Address</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "SELECT * FROM students";
                $res = mysqli_query($conn, $sql);
                $row = mysqli_num_rows($res);
                if ($row > 0) {

                    while ($display = mysqli_fetch_assoc($res)) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $display['id'] ?></th>
                            <td> <?php echo $display['firstname'] ?></td>
                            <td><?php echo $display['lastname'] ?></td>
                            <td><?php echo $display['email'] ?></td>
                            <td><?php echo $display['password'] ?></td>
                            <td><?php echo $display['age'] ?></td>
                            <td><?php echo $display['city'] ?></td>
                            <td><?php echo $display['address'] ?></td>
                            <td><?php echo $display['created_at'] ?></td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="delete.php?id=<?php echo $display['id'] ?>">Delete</a>
                            </td>
                        </tr>
                <?php   }

                    echo "Record Found";
                } else {
                    echo "Record Not Found";
                }
                ?>


            </tbody>
        </table>
    </div>

    <?php
    include_once "TaskLayout/taskfooter.php";
    ?>
</body>

</html>