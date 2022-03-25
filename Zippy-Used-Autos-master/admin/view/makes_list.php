<?php include('view/header.php'); ?>
<section class="makes_list">
    <h2 class="text-primary">Vehicle Make List</h2>
    <div class="table_container table-responsive">
        <?php if (!empty($makes_list)) { ?>
            <table class="table table-hover align-middle">
                <tr>
                    <th>Name</th>
                    <th></th>
                </tr>

                <?php foreach($makes_list as $make)  { ?>
                    <tr>
                        <td><?= $make->getName() ?></td>
                        <td>
                            <form action="." METHOD="POST" class="delete_form text-end">
                                <input type="hidden" name="action" value="delete_make">
                                <input type="hidden" name="make_id" value="<?= $make->getID() ?>">
                                <button class="btn btn-sm btn-danger ">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p class="message">No Vehicle Makes exist yet.</p>
        <?php } ?>
    </div>

    <?php include('view/add_make_form.php'); ?>
    <?php include('view/status.php'); ?>
</section>
<?php include('view/footer.php'); ?>