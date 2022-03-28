<?php
session_start();

echo "Ви знаходитесь в особливому кабінеті клієнта"."<br>";

require_once ('auth.php');
require_once('init.php');

echo $translation['hello'] . " &nbsp" . $user->present() . ' ' . $translation['opportunities'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
</head>
<body>
<?php include('radio_button.html'); ?>
<br>
<a href="/admin.php"> Сторінка адміністратора</a><br>
<a href="/maneger.php"> Сторінка менеджера</a>
<br>
<form action="/form.php" method="GET">
    <button type="submit" class="btn btn-primary" name="action" value="logout">Logout</button>
</form>
</body>
</html>
