<?php
session_start();
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuova password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <header class="bg-primary text-white text-center py-5 mb-5">
        <h1 class="display-4 fw-bold">Nuova password</h1>
    </header>

    <div class="bg-light rounded m-5 p-4 d-flex justify-content-center">
        <p>La tua nuova password è <?= $password ?></p>
    </div>
</body>

</html>