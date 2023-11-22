<?php
include "includes/dbh.php";

if (isset($_POST["submit"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `pwd`) VALUES ('$firstname','$lastname','$username','$email','$pwd')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?success=added");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Code+Latin:wght@300;400&display=swap" rel="stylesheet">
</head>
<style>
    div {
        font-family: 'M PLUS Code Latin', monospace;
    }
</style>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <form action="" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" id="firstName" name="firstname" autocomplete="off" placeholder="First Name" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="lastName" name="lastname" autocomplete="off" placeholder="Last Name" required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="E-mail" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="pwd" autocomplete="off" placeholder="Password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>