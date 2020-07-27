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
                            <h3 class="text-center text-black-50">Result Club Registration</h3><br>
                            <section>
                            <h4>Basic Information</h4>
                            <div class="form-group">
                                <label for="name" class="text-black">Name:</label><br>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email" class="text-black">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="indexNo" class="text-black">Index Number:</label><br>
                                <input type="text" name="indexNo" id="indexNo" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="degree" class="text-black">Degree Program:</label><br>
                                <select name="degree" id="degree" class="form-control">
                                    <option value="CS">Computer Science</option>
                                    <option value="IS">Information Systems</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="batch" class="text-black">Batch:(Value can be a positive number)</label><br>
                                <input type="number" name="batch" id="batch" class="form-control">
                            </div>
                            </section>
                            <section>
                            <h4>Login Information</h4>
                            <div class="form-group">
                                <label for="userName" class="text-black">Username:(use your registration number)</label><br>
                                <input type="text" name="userName" id="userName" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-black">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            </section>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="register" class="btn btn-success btn-md form-control" value="Register"><br><br>
                                <input type="reset" name="cancel" class="btn btn-danger btn-md form-control" value="Cancel">
                            </div>
                            <!-- <div id="login-link" class="text-right">
                                <a href="#" class="text-black-23">Login here</a>
                            </div> -->
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <script src="assets/js/bootstrap.js"></script>
</body>
</html>