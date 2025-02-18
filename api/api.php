<?php
include 'functions.php';

$action = verifyInput($_GET['action']);

if ($action == 'login') {
    login();
} else if ($action == 'logout') {
    logout();
} else if ($action == 'newAppointment') {
    newAppointment();
} else if ($action == 'appointments') {
    appointments();
} else {
    $error['error'] = true;
    $error['message'] = 'Action not valid';
    sendJSON($error);
}
