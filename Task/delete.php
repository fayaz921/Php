<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student Data</title>
</head>

<body>
    <h1>Delete Page</h1>
    <?php
    include_once "taskdb.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id='$id' ";
        $delete = mysqli_query($conn, $sql);
        if ($delete) {
            echo "Record deleted successfully.";
            header('location: tasktable.php');
        }
         else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>