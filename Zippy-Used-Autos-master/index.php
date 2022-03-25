<?php
// Start session management with a persistent cookie
$lifetime = 60 * 60 * 24 * 14; // 2 weeks in seconds
session_set_cookie_params($lifetime, '/');
session_start();

require_once('model/database.php');
require_once('util/util.php');

// Model - class/table php files
require_once('model/make.php');
require_once('model/type.php');
require_once('model/class.php');
require_once('model/vehicle.php');
require_once('model/vehicles_table.php');
require_once('model/makes_table.php');
require_once('model/types_table.php');
require_once('model/classes_table.php');

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
if (!$action) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if (!$action) {
        $action = 'vehicles_list';
    }
}

$firstname = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_STRING);
if ($firstname) {
    // Set the session variable 'userid' to $firstname
    $_SESSION['userid'] = $firstname;
}

switch ($action) {
    case 'vehicles_list':
    case 'vehicles_list_filtered': {
        $make_id = filter_input(INPUT_GET, 'make_id', FILTER_VALIDATE_INT);
        $type_id = filter_input(INPUT_GET, 'type_id', FILTER_VALIDATE_INT);
        $class_id = filter_input(INPUT_GET, 'class_id', FILTER_VALIDATE_INT);
        $sort_by = filter_input(INPUT_GET, 'sort_by', FILTER_SANITIZE_STRING) ?? 'price';

        if ($make_id || $type_id || $class_id || $sort_by) {
            // filters array used to implement EC (a), where it filters
            // results based on combination of make, type, and class
            $filters = [];
            if ($make_id) {
                $filters['make_id'] = $make_id;
            }

            if ($type_id) {
                $filters['type_id'] = $type_id;
            }

            if ($class_id) {
                $filters['class_id'] = $class_id;
            }

            // This is the implementation WITHOUT EC, just simple if-elseif statements
            // make { + type || + class }, then it filters only by make due to precedence
            // type { +class }, returns records by type
            // if ($make_id) {
            //     $filters['make_id'] = $make_id;
            // } elseif ($type_id) {
            //     $filters['type_id'] = $type_id;
            // } else if ($class_id) {
            //     $filters['class_id'] = $class_id;
            // }

            $vehicles_list = VehiclesTable::get_vehicles_filtered($sort_by, $filters);
        } else {
            $vehicles_list = VehiclesTable::get_vehicles();
        }

        $makes_list = MakesTable::get_makes();
        $types_list = TypesTable::get_types();
        $classes_list = ClassesTable::get_classes();

        include('view/vehicles_list.php');
        break;
    }
    case 'register': {
        include('view/register.php');
        break;
    }
    case 'logout': {
        $firstname = $_SESSION['userid'];
        unset($_SESSION['userid']);
        session_destroy();

        // Delete session cookie
        $session_name = session_name();
        $expire = strtotime('-1 year');
        $params = session_get_cookie_params();
        $path = $params['path'];
        $domain = $params['domain'];
        $secure = $params['secure'];
        $httponly = $params['httponly'];
        setcookie($session_name, '', $expire, $path, $domain, $secure, $httponly);

        include('view/logout.php');
        break;
    }
}

?>