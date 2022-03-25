<?php
    $added_make = filter_input(INPUT_GET, 'added_make', FILTER_VALIDATE_INT);
    $added_type = filter_input(INPUT_GET, 'added_type', FILTER_VALIDATE_INT);
    $added_class = filter_input(INPUT_GET, 'added_class', FILTER_VALIDATE_INT);

    if (isset($added_make) && $added_make == 0) {
        echo '<p class="status text-danger">Duplicate make entry</p>';
    }
    if (isset($added_type) && $added_type == 0) {
        echo '<p class="status text-danger">Duplicate type entry</p>';
    }
    if (isset($added_class) && $added_class == 0) {
        echo '<p class="status text-danger">Duplicate class entry</p>';
    }
?>