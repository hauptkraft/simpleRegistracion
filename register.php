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
    <!--Форма регистрации-->
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите полное имя">
        <label>email</label>
        <input type="email" name="email" placeholder="Введите email">
        <label>Изображение профиля</label>
        <input name="avatar" type="file">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Повторите пароль</label>
        <input type="password" name="password_confirm" placeholder="Введите пароль еще раз">
        <button type="submit">Зарегистрироваться</button>
        <p>
            Уже есть аккаунт ? - <a href="/index.php">Авторизация</a>
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