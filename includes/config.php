<?php
session_start();

// Default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'tr';
}

// Language change handler
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// Include language file
include_once 'lang/' . $_SESSION['lang'] . '.php';

// Translation function
function __($key) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $key;
}
?> 