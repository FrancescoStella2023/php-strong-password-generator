<?php
require_once "./functions.php";

if ($password != "") {

    session_start();

    $_SESSION['password'] = $password;

    header("Location: ./result.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
    <!-- Linking bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <header class="bg-primary text-white text-center py-5 mb-5">
        <h1 class="display-4 fw-bold">Generatore di password</h1>
    </header>

    <form action="" class="bg-light m-5 p-4 rounded">
        <div class="d-flex gap-4 justify-content-center m-4">
            <input type="number" min="5" max="20" name="lenght" id="lenght"
                value="<?php echo isset($lenght) && $lenght != "" ? "$lenght" : 5 ?>">
            <label class="form-label" for="lenght">Lunghezza</label>

        </div>
        <div class="d-flex gap-2 justify-content-center m-4">
            <input type="radio" name="repetition" id="repetition">
            <label class="form-label" for="lenght">consenti la ripetizione dei caratteri</label>
        </div>
        <div class="d-flex justify-content-center m-4">
            <button type="submit" class="btn btn-primary">Genera password</button>
        </div>
    </form>

    <?php
    if (isset($password) && $password != "") {
        ?>
        <div class="d-flex justify-content-center bg-light m-5 p-4 rounded">
            <p>La tua nuova password è <?= $password ?></p>
        </div>
    <?php } ?>

</body>

</html>