<?php
switch ($action) {
    case 'login': {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        if (AdminDB::is_valid_admin_login($username, $password)) {
            $_SESSION['is_valid_admin'] = true;
            header("Location: .?action=vehicles_list");
        } else {
            $login_message = 'Incorrect Login / Login Required.';
            include('view/login.php');
        }
        break;
    }

    case 'show_login': {
        include('view/login.php');
        break;
    }

    case 'register': {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);

        if ($username && $password && $confirm_password) {
            include('util/valid_register.php');

            $errors = ValidRegister::valid_registration($username, $password, $confirm_password);

            if (AdminDB::username_exists($username)) {
                array_push($errors, "The username you entered is already taken.");
            }

            if (count($errors)) {
                include('view/register.php');
            } else {
                AdminDB::add_admin($username, $password);
                $_SESSION['is_valid_admin'] = true;
                header("Location: .?action=vehicles_list");
            }
        }
        break;
    }

    case 'show_register': {
        include('view/register.php');
        break;
    }

    case 'logout': {
        $_SESSION = array();        // Clear session data
        session_destroy();      // Clean up session id

        $login_message = 'You have been logged out.';
        include('view/login.php');
        break;
    }
}
?>