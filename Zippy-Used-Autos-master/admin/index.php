<?php
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14; // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

require_once('../model/database.php');
require_once('../util/util.php');

// Model - class/table php files
require_once('../model/make.php');
require_once('../model/type.php');
require_once('../model/class.php');
require_once('../model/vehicle.php');
require_once('../model/vehicles_table.php');
require_once('../model/makes_table.php');
require_once('../model/types_table.php');
require_once('../model/classes_table.php');
require_once('../model/admin_db.php');

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = 'vehicles_list';
    }
}

// Controllers
require_once('controller/vehicles.php');
require_once('controller/makes.php');
require_once('controller/types.php');
require_once('controller/classes.php');
require_once('controller/admin.php');
?>