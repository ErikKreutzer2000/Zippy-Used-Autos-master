<?php include('view/header.php'); ?>
<section class="vehicles_list">
    <?php include('view/get_vehicles_form.php'); ?>

    <div class="table_container table-responsive">
        <?php if (!empty($vehicles_list)) { ?>
            <table class="table table-hover align-middle">
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                    <th></th>
                </tr>

                <?php foreach($vehicles_list as $vehicle)  {
                    $year = $vehicle->getYear();
                    $model = $vehicle->getModel();
                    $price = $vehicle->getPrice();
                    $formattedPrice = $vehicle->getFormattedPrice();
                    $make_name = $vehicle->getMake()->getName() ?? 'n/a';
                    $type_name = $vehicle->getType()->getName() ?? 'n/a';
                    $class_name = $vehicle->getClass()->getName() ?? 'n/a';
                ?>
                    <tr>
                        <td><?= $year ?></td>
                        <td><?= $make_name ?></td>
                        <td><?= $model ?></td>
                        <td><?= $type_name ?></td>
                        <td><?= $class_name ?></td>
                        <td><?= $formattedPrice ?></td>

                        <td>
                            <form action="." METHOD="POST" class="delete_form text-end">
                                <input type="hidden" name="action" value="delete_vehicle">
                                <input type="hidden" name="year" value="<?= $year ?>">
                                <input type="hidden" name="model" value="<?= $model ?>">
                                <input type="hidden" name="price" value="<?= $price ?>">
                                <input type="hidden" name="make_id" value="<?= $vehicle->getMake()->getID() ?>">
                                <input type="hidden" name="type_id" value="<?= $vehicle->getType()->getID() ?>">
                                <input type="hidden" name="class_id" value="<?= $vehicle->getClass()->getID() ?>">
                                <button class="btn btn-sm btn-danger ">Remove</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        <?php } else { ?>
            <p class="message">No vehicles exist yet.</p>
        <?php } ?>
    </div>
</section>
<?php include('view/footer.php'); ?>
