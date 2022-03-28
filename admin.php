<?php
session_start();

require_once ('auth.php');
require_once('init.php');

if ($role == 'admin'  ){
    echo "Ви знаходитесь в особливому кабінеті адміністратора"."<br>";
} else if (!$role || $role !== 'admin'  ){
    include (__DIR__ . '/403.php');
}
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
<a href="/maneger.php"> Сторінка менеджера</a><br>
<a href="/client.php"> Сторінка клієнта</a>
<br>
<form action="/form.php" method="GET">
    <button type="submit" class="btn btn-primary" name="action" value="logout">Logout</button>
</form>
</body>
</html>
