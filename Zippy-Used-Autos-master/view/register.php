<?php include('view/header.php'); ?>

<?php if(!$firstname) { ?>
    <form action="." method="GET" class="add_form">
        <div class="container">
            <input type="hidden" name="action" value="register">
            <div class="form_group my-2 row">
                <label for="firstname" class="form_label px-0">Please enter your firstname:</label>
                <input type="text" name="firstname" id="firstname" class="form_field" maxlength="100" autocomplete="off" aria-required="true" required>
            </div>
            <div class="form_group my-2 row">
                <button class="btn btn-outline-primary">Register</button>
            </div>
        </div>
    </form>
<?php } else { ?>
    <h2 class="text-primary"><?= "Thank you for registering, {$firstname}!" ?></h2>
    <p><a href="?action=vehicles_list">Click here</a> to view our vehicle list.</p>
<?php } ?>

<?php include('view/footer.php'); ?>