<?php
session_start();

require_once(__DIR__ . '/Classes/User/User.php');
require_once(__DIR__ . '/Classes/User/Admin.php');
require_once(__DIR__ . '/Classes/User/Client.php');
require_once(__DIR__ . '/Classes/User/Maneger.php');


function checkRoute($role, $route)
{
    $routes = [
        'admin' => ['/client.php', '/maneger.php', '/admin.php'],
        'client' => ['/client.php'],
        'maneger' => ['/client.php', '/maneger.php'],
    ];

    if (isset($routes[$role]) && in_array($route, $routes[$role])) {
        return $route;
    }

    return '403.php';
}

if (isset($_POST['submit'])) {
    $user = User::auth($_POST['password'], $_POST['login']);
}

if (isset($_SESSION['id'])) {
    $user = new User($_SESSION['id']);
    $name = $user->getName();
    $surname = $user->getsurname();
    $role = $user->getRole();

    $redirect = null;

    switch ($role) {
        case 'admin' :
            $user = (new Admin($_SESSION['id']));
            break;
        case 'client' :
            $user = (new Client($_SESSION['id']));
            break;
        case 'maneger' :
            $user = (new Maneger($_SESSION['id']));
            break;
        default:
            include(__DIR__ . '/403.php');
            die();
    }
    $route = $_SERVER['REQUEST_URI'] === '/form.php' ? "/" . $user::HOME : $_SERVER['REQUEST_URI'];
    $redirect = checkRoute($user->getRole(), $route);

    if ($_SERVER['REQUEST_URI'] !== $route)
        header('Location: ' . $redirect);

}
