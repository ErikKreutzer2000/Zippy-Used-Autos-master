<h2 class="text-primary">Add Vehicle Make</h2>
<form action="." method="POST" class="add_form">
    <div class="container">
        <input type="hidden" name="action" value="add_make">
        <div class="form_group my-2 row">
            <label for="make_name" class="form_label px-0">Name: </label>
            <input class="form_field" type="text" name="make_name" id="make_name" maxlength="100" autocomplete="off" aria-required="true" required>
        </div>
        <div class="form_group my-2 row">
            <div></div>
            <button class="btn btn-outline-primary">Add Make</button>
        </div>
    </div>
</form>