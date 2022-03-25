<?php include('view/header.php'); ?>
<section class="classes_list">
    <h2 class="text-primary">Vehicle Class List</h2>
    <div class="table_container table-responsive">
        <?php if (!empty($classes_list)) { ?>
            <table class="table table-hover align-middle">
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>

                <?php foreach($classes_list as $class)  { ?>
                    <tr>
                        <td><?= $class->getName() ?></td>
                        <td>
                            <form action="." METHOD="POST" class="delete_form text-end">
                                <input type="hidden" name="action" value="delete_class">
                                <input type="hidden" name="class_id" value="<?= $class->getID() ?>">
                                <button class="btn btn-sm btn-danger ">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p class="message">No Vehicle Class exist yet.</p>
        <?php } ?>
    </div>

    <?php include('view/add_class_form.php'); ?>
    <?php include('view/status.php'); ?>
</section>
<?php include('view/footer.php'); ?>