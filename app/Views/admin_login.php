<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <?php helper('html'); echo link_tag('css/login.css'); ?>
    <title>Administrator Sign-in - Alumni Tracking System</title>
</head>
<body>
    <!-- Content -->
    <div class="container-fluid" id="m-top">
        <div class="container py-5 px-5 shadow" style="max-width: 500px;">
            <div class="form-group">
                <div class="media">
                    <img src="https://spup.edu.ph/wp-content/uploads/2019/05/favicon.png" width="50" height="50" class="mr-3" alt="" loading="lazy">
                    <div class="media-body">
                        St. Paul University Philippines<br>
                        Tuguegarao City, Cagayan 3500
                    </div>
                </div>
            </div>
            <div class="mb-3"><h1>Administrator Sign in</h1></div>
                <?php if (isset($_SESSION['errormsg'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $_SESSION['errormsg'] ?>
                    </div>
                <?php endif ?>
            <form class="form-signin" method="post" action="adminauth">
                <div class="form-label-group">
                <input type="input" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                    <label for="inputUsername">Username</label>
                </div>

                <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <label for="inputPassword">Password</label>
                </div>
                
                <button class="btn btn-lg btn-success btn-block text-uppercase" type="submit">Sign in</button>
                
                <div class="row text-center mt-3">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control">
                            <a href="#">Forgot password&#63;</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
</body>
</html>