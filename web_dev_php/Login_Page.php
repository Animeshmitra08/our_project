<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="Style/styles_index.css">
</head>
<body>
    <div class="main">
        <div class="card" style="width: 25rem;">
            <h1>Login</h1>
            <form action="Php/Login.php" method="post" id="form">
                <div class="mb-3 row">
                    <label for="validationServerUsername" class="col-form-label">Username</label>
                    <div class="input-group">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="text" class="form-control" name="username" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="Password">
                </div>
                <div class="col-12">
                    <button class="btn btn-primary s1" id="s1" type="submit">Login</button>
                </div>
                <a href="http://localhost/web_dev_php/Register.php">Create Account </a>
            </form>
        </div>
    </div>
    <div class="snd">
        <input type="date" name="caca" id="csac">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="Scripts/script_index.js"></script>
</body>
</html>