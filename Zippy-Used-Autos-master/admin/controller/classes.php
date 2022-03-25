<?php
switch ($action) {
    case 'classes_list': {
        $classes_list = ClassesTable::get_classes();
        include('view/classes_list.php');
        break;
    }

    case 'add_class': {
        $class_name = filter_input(INPUT_POST, 'class_name', FILTER_SANITIZE_STRING);
        if ($class_name) {
            $count = ClassesTable::add_class($class_name);
            header("Location: .?action=classes_list&added_class={$count}");
        } else {
            $error_message = 'Invalid vehicle class';
            include('view/error.php');
        }
        break;
    }

    case 'delete_class': {
        $class_id = filter_input(INPUT_POST, 'class_id', FILTER_VALIDATE_INT);
        if ($class_id) {
            $count = ClassesTable::delete_class($class_id);
            header("Location: .?action=classes_list&deleted_class={$count}");
        } else {
            $error_message = 'Invalid vehicle class';
            include('view/error.php');
        }
        break;
    }
}
?>