<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Installation Page - Alumni Tracking System</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Installation Page - Alumni Tracking System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-4">Installation Page</h1>
        <p class="lead">This page will only appear if there is no Administrator registered in the database</p>
        <p class="lead">Registration required to use this website application</p>
      </div>
    </div>
    <div class="row mt-3">
        <form action="post" class="mx-auto needs-validation" oninput='confirmPassword.setCustomValidity(confirmPassword.value != password.value ? "Passwords do not match." : "")' novalidate>
          <h3>Register</h3>
          <div class="form-group">
              <label for="inputUsername">Username</label>
              <input type="text" class="form-control" name="username" id="inputUsername" oninput='validateUsername()' required>
              <div id="usernameVal" class="invalid-feedback">
                Username Required
              </div>
          </div>
          <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword" required>
              <div class="invalid-feedback">
                Password Required
              </div>
          </div>
          <div class="form-group">
              <label for="inputConfirmedPassword">Confirm Password</label>
              <input type="password" class="form-control" name="confirmPassword" id="inputConfirmedPassword" required>
              <div class="invalid-feedback">
                Re-enter Password
              </div>
          </div>
          <div class="form-group">
              <label for="inputEmail">Email Address</label>
              <input type="email" class="form-control" name="email" id="inputEmail" required>
              <small id="emailHelp" class="form-text text-muted">Required for Account recovery</small>
              <div class="invalid-feedback">
                E-mail Required
              </div>
          </div>
          <h3>Personal Information</h3>
          <div class="form-group">
              <label for="inputFirstName">First Name</label>
              <input type="text" class="form-control" name="firstname" id="inputFirstName" required>
              <div class="invalid-feedback">
                First Name Required
              </div>
          </div>
          <div class="form-group">
              <label for="inputLastName">Last Name</label>
              <input type="text" class="form-control" name="lastname" id="inputLastName" required>
              <div class="invalid-feedback">
                Last Name Required
              </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
  <script>

    function validateUsername() {

      // Regexp to disallow spaces
      var acceptedUsernamePattern = /^\w+$/;


      if (!acceptedUsernamePattern.test(document.getElementById('inputUsername').value)) {
        if (document.getElementById('inputUsername').value.length > 0) {
          document.getElementById('inputUsername').setCustomValidity("Username must not contain any spaces");
          document.getElementById('usernameVal').innerHTML = "Username must not contain any spaces"
        } else {
          document.getElementById('inputUsername').setCustomValidity("Username Required");
          document.getElementById('usernameVal').innerHTML = "Username Required"
        }
      } else {
        document.getElementById('inputUsername').setCustomValidity("");
      }
    }

    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Verify entered password

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        

        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            

            

            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>