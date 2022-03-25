<?php include('view/header.php'); ?>
<section class="add_vehicle_form">
    <h2 class="text-primary">Add Vehicle</h2>

    <form action="." method="post" class="add_form">
        <div class="container">

            <input type="hidden" name="action" value="add_vehicle">

            <!-- Drop down for makes list -->
            <div class="form_group my-2 row">
                <label for="make_id" class="form_label px-0">Make:</label>
                <select name="make_id" id="make_id">
                    <?php foreach ($makes_list as $make) { ?>
                        <option value="<?= $make->getID() ?>"><?= $make->getName() ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Drop down for types list -->
            <div class="form_group my-2 row">
                <label for="type_id" class="form_label px-0">Type:</label>
                <select name="type_id" id="type_id">
                    <?php foreach ($types_list as $type) { ?>
                        <option value="<?= $type->getID() ?>"><?= $type->getName() ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Drop down for classes list -->
            <div class="form_group my-2 row">
                <label for="class_id" class="form_label px-0">Class:</label>
                <select name="class_id" id="class_id">
                    <?php foreach ($classes_list as $class) { ?>
                        <option value="<?= $class->getID() ?>"><?= $class->getName() ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Vehicle Year -->
            <div class="form_group my-2 row">
                <label for="year" class="form_label px-0">Year:</label>
                <input type="text" name="year" id="year" minlength="4" maxlength="4" pattern="[0-9]{4}" autocomplete="off" class="form_field" aria-required="true" required>
            </div>

            <!-- Vehicle Model -->
            <div class="form_group my-2 row">
                <label for="model" class="form_label px-0">Model:</label>
                <input type="text" name="model" id="model" maxlength="100" autocomplete="off" class="form_field" aria-required="true" required>
            </div>

            <!-- Vehicle Price -->
            <div class="form_group my-2 row">
                <label for="price" class="form_label px-0">Price:</label>
                <input type="number" name="price" id="price" step="0.01" min="0.00" autocomplete="off" class="form_field" aria-required="true" required>
            </div>

            <!-- Submit -->
            <div class="form_group my-2 row">
                <button type="submit" class="btn btn-outline-primary">Add Vehicle</button>
            </div>

        </div>
    </form>
</section>
<?php include('view/footer.php'); ?>