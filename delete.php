<?php
// sql to delete a record
include 'includes/dbh.php';
$id = $_GET['id'];

if (isset($id)) {
    $sql = "DELETE FROM `users` WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?delete=success");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
