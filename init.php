<?php

session_start();

require_once(__DIR__ . '/Classes/Translation.php');

 if (isset($_SESSION['id'])) {

    $lang = $_POST['lang'] ?? $_SESSION['lang'];
    $translation = new Translation($user, $lang);
    $translation = $translation->getTranslation();

   // echo $translation['hello'] . " &nbsp" . $user->present() . ' ' . $translation['opportunities'];

}

