<?php include('view/header.php'); ?>
<section class="types_list">
    <h2 class="text-primary">Vehicle Type List</h2>
    <div class="table_container table-responsive">
        <?php if (!empty($types_list)) { ?>
            <table class="table table-hover align-middle">
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>

                <?php foreach($types_list as $type)  { ?>
                    <tr>
                        <td><?= $type->getName() ?></td>
                        <td>
                            <form action="." METHOD="POST" class="delete_form text-end">
                                <input type="hidden" name="action" value="delete_type">
                                <input type="hidden" name="type_id" value="<?= $type->getID() ?>">
                                <button class="btn btn-sm btn-danger ">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p class="message">No Vehicle Type exist yet.</p>
        <?php } ?>
    </div>

    <?php include('view/add_type_form.php'); ?>
    <?php include('view/status.php'); ?>
</section>
<?php include('view/footer.php'); ?>