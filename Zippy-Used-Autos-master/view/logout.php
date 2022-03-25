<?php include('view/header.php'); ?>

<h2 class="text-primary"><?= "Thank you for signing out, {$firstname}." ?></h2>
<p><a href="?action=vehicles_list">Click here</a> to view our vehicle list.</p>

<?php unset($firstname); ?>
<?php include('view/footer.php'); ?>