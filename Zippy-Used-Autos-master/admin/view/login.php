<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">

    <title>Zippy Used Autos</title>
</head>
<body class="p-4">
    <header class="mb-2 border-bottom border-1 border-secondary"><h1>Zippy Admin</h1></header>
    <main>
        <p class="<?= (!isset($login_message) ? 'text-primary' : 'text-danger') ?> fw-bold">
            <?= (isset($login_message) ? $login_message : 'Please fill in your credentials to login.') ?>
        </p>

        <form action="." method="POST" class="add_form">
            <div class="container">
                <input type="hidden" name="action" value="login">
                <div class="form_group my-2 row">
                    <label for="username" class="form_label px-0">Username: </label>
                    <input class="form_field" type="text" name="username" id="username" maxlength="255" autocomplete="off" aria-required="true" autofocus required>
                </div>
                <div class="form_group my-2 row">
                    <label for="password" class="form_label px-0">Password: </label>
                    <input class="form_field" type="password" name="password" id="password" maxlength="255" autocomplete="off" aria-required="true" required>
                </div>
                <div class="form_group my-2 row">
                    <button class="btn btn-outline-primary">Sign In</button>
                </div>
            </div>
        </form>
    </main>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>