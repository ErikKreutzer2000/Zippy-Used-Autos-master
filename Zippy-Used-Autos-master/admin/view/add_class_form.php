<h2 class="text-primary">Add Vehicle Class</h2>
<form action="." method="POST" class="add_form">
    <div class="container">
        <input type="hidden" name="action" value="add_class">
        <div class="form_group my-2 row">
            <label for="class_name" class="form_label px-0">Name: </label>
            <input class="form_field" type="text" name="class_name" id="class_name" maxlength="100" autocomplete="off" aria-required="true" required>
        </div>
        <div class="form_group my-2 row">
            <div></div>
            <button class="btn btn-outline-primary">Add Class</button>
        </div>
    </div>
</form>