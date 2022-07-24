<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.css"  rel="stylesheet" type="text/css">
    <title>Регистрация, авторизация</title>
</head>
<body>
    <!--Форма профиля-->
    <!-- <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="Фото профиля">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
    </form> -->
    <div id="profile">
        <nav>
            <img src="<?= $_SESSION['user']['avatar'] ?>" width="100" alt="Фото профиля">
            <h2><?= $_SESSION['user']['full_name'] ?></h2>
            <a href="#"><?= $_SESSION['user']['email'] ?></a>
        </nav>
    </div>
</body>
</html>