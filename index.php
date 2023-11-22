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

    <div class="container min-vh-100 d-flex justify-content-center align-items-center flex-column">
        <a href="create.php" class="text-uppercase text-decoration-none text-light btn btn-danger mb-4">Add New</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Username</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'includes/dbh.php';
                $sql = "SELECT * FROM `users` LIMIT 9";
                $result = mysqli_query($conn, $sql);

                $num = 1;

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td>
                                <?php echo $num ?>
                            </td>
                            <td>
                                <?php echo $row['firstname'] ?>
                            </td>
                            <td>
                                <?php echo $row['lastname'] ?>
                            </td>
                            <td>
                                <?php echo $row['username'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <?php echo $row['created_at'] ?>
                            </td>
                            <td>
                                <a href="update.php?id=<?php echo $row["id"] ?>" class="text-uppercase text-decoration-none text-light btn btn-primary">update</a>
                                <a href="delete.php?id=<?php echo $row["id"] ?>" class="text-uppercase text-decoration-none text-light btn btn-danger">delete</a>
                            </td>
                        </tr>

                <?php
                        $num++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>