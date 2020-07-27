<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Club</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-lg-6">
                    <div id="login-box" class="col-lg-10">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-black">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-black">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-success btn-md form-control" value="Login"><br><br>
                                <input type="reset" name="cancel" class="btn btn-danger btn-md form-control" value="Cancel">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-black-23">Register here</a>
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>