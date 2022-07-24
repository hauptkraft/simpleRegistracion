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
    <!--Форма авторизации-->
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            Уже есть аккаунт? - <a href="/register.php">Регистрация</a>
        </p>
        <?php
            if($_SESSION['message']){
                echo '<p class="msg"> '. $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);  
        ?>
    </form>
</body>
</html>