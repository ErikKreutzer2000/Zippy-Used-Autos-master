<?php
if (!isset($_SESSION['is_valid_admin'])) {
    header('Location: .?action=show_login');
}
?>
