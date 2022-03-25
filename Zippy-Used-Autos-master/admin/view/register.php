<?php include('view/header.php'); ?>

<h2 class="text-primary">Register a new admin user</h2>

<?php if (isset($errors)) { ?>
<ul class="fw-bold">
    <?php foreach ($errors as $error) { ?>
        <li class="text-danger"><?= $error ?></li>
    <?php } ?>
</ul>
<?php } ?>

<form action="." method="POST" class="add_form">
    <div class="container">
        <input type="hidden" name="action" value="register">
        <div class="form_group my-2 row">
            <label for="username" class="form_label px-0">Username: </label>
            <input class="form_field" type="text" name="username" id="username" maxlength="255" autocomplete="off" aria-required="true" autofocus required>
        </div>
        <div class="form_group my-2 row">
            <label for="password" class="form_label px-0">Password: </label>
            <input class="form_field" type="password" name="password" id="password" maxlength="255" autocomplete="off" aria-required="true" required>
        </div>
        <div class="form_group my-2 row">
            <label for="confirm_password" class="form_label px-0">Confirm Password: </label>
            <input class="form_field" type="password" name="confirm_password" id="confirm_password" maxlength="255" autocomplete="off" aria-required="true" required>
        </div>
        <div class="form_group my-2 row">
            <button class="btn btn-outline-primary">Register</button>
        </div>
    </div>
</form>

<?php include('view/footer.php'); ?>