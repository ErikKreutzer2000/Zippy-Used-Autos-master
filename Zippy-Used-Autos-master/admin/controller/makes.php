<?php
switch ($action) {
    case 'makes_list': {
        $makes_list = MakesTable::get_makes();
        include('view/makes_list.php');
        break;
    }

    case 'add_make': {
        $make_name = filter_input(INPUT_POST, 'make_name', FILTER_SANITIZE_STRING);
        if ($make_name) {
            $count = MakesTable::add_make($make_name);
            header("Location: .?action=makes_list&added_make={$count}");
        } else {
            $error_message = 'Invalid vehicle make';
            include('view/error.php');
        }
        break;
    }

    case 'delete_make': {
        $make_id = filter_input(INPUT_POST, 'make_id', FILTER_VALIDATE_INT);
        if ($make_id) {
            $count = MakesTable::delete_make($make_id);
            header("Location: .?action=makes_list&deleted_make={$count}");
        } else {
            $error_message = 'Invalid vehicle make';
            include('view/error.php');
        }
        break;
    }
}
?>