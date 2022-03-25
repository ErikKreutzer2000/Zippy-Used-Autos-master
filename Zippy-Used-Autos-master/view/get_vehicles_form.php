<form action="." method="GET" class="vehicles_list_filtered container">
    <input type="hidden" name="action" value="vehicles_list_filtered">
    <div class="row d-flex justify-content-center">
        <div class="form_group col-lg-2 d-flex justify-content-center align-items-center my-2">
            <label for="make_id" aria-label="Filter by Make"></label>
            <select class="w-100" name="make_id" id="make_id">
                <option value="" <?= (!$make_id ? 'selected' : '') ?>>View All Makes</option>
                <?php foreach ($makes_list as $make) { ?>
                    <option
                    value="<?= $make->getID() ?>"
                    <?= (isset($make_id) && $make_id == $make->getID() ? 'selected' : '') ?>
                    ><?= $make->getName() ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form_group col-lg-2 d-flex justify-content-center align-items-center my-2">
            <label for="type_id" aria-label="Filter by Type"></label>
            <select class="w-100" name="type_id" id="type_id">
                <option value="" <?= (!$type_id ? 'selected' : '') ?>>View All Types</option>
                <?php foreach ($types_list as $type) { ?>
                    <option
                    value="<?= $type->getID() ?>"
                    <?= (isset($type_id) && $type_id == $type->getID() ? 'selected' : '') ?>
                    ><?= $type->getName() ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form_group col-lg-2 d-flex justify-content-center align-items-center my-2">
            <label for="class_id" aria-label="Filter by Class"></label>
            <select class="w-100" name="class_id" id="class_id">
                <option value="" <?= (!$class_id ? 'selected' : '') ?>>View All Classes</option>
                <?php foreach ($classes_list as $class) { ?>
                    <option
                    value="<?= $class->getID() ?>"
                    <?= (isset($class_id) && $class_id == $class->getID() ? 'selected' : '') ?>
                    ><?= $class->getName() ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form_group col-lg-4 d-flex justify-content-center align-items-center my-2">
            <div class="px-1">
                <span class="sort_by">Sort by: </span>
            </div>

            <div class="px-1">
                <input type="radio" name="sort_by" id="sort_by_price" value="price" checked>
                <label for="sort_by_price">Price</label>
            </div>

            <div class="px-1">
                <input type="radio" name="sort_by" id="sort_by_year" value="year" <?= $sort_by == 'year' ? 'checked' : '' ?>>
                <label for="sort_by_year">Year</label>
            </div>

            <div class="px-1">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
        </div>
    </div>
</form>