<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Bare - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Installation Page</h1>
        <p class="lead">This page will only appear if there is no Administrator registered in the database</p>
        <p class="lead">Registration required to use this website application</p>
      </div>
    </div>
    <div class="row mt-5">
        <form action="post" class="mx-auto">
          <h2>Register</h2>
          <div class="form-group">
              <label for="inputUsername">Username</label>
              <input type="text" class="form-control" name="username" id="inputUsername" required>
          </div>
          <div class="form-group">
              <label for="inputPassword">Password</label>
              <input type="password" class="form-control" name="password" id="inputPassword" required>  
          </div>
          <div class="form-group">
              <label for="inputEmail">Email Address</label>
              <input type="email" class="form-control" name="email" id="inputEmail" required>
              <small id="emailHelp" class="form-text text-muted">Required for Account recovery</small>
          </div>
          <h2>Personal Information</h2>
          <div class="form-group">
              <label for="inputFirstName">First Name</label>
              <input type="text" class="form-control" name="firstname" id="inputFirstName" required>
          </div>
          <div class="form-group">
              <label for="inputLastName">Last Name</label>
              <input type="text" class="form-control" name="lastname" id="inputLastName" required> 
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

</body>

</html>