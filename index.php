<!doctype html>
<html lang="en">

<!-- 
 An EMPLOYEE MANAGEMENT SYSTEM,
 which ia a full-stack web-application to perform the
 basic database operation (The CRUD operation) on the 
 employee's data.I hope you like! Thank you.
 author: Mr. Krish.N.Soni @2024
 -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Index</title>
  <link rel="website icon" type="png" href="./Images/emp_image.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <!-- navbar starts -->

  <h2 class="text-info"><a class="navbar-brand" href="index.php">EMPLOYEE MANAGEMENT SYSTEM</a></h2>
  <nav class="navbar navbar-expand-lg bg-info">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: medium;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="./pages/create.php">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./pages/read.php">Read</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./pages/update.php">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="./pages/delete.php">Delete</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- navbar ends -->

  <!-- body starts-->
  <div class="head1" style="display:block;">
    <img src="./Images/carousel-2.jpg" alt="??" width="100%" height="80%" style="position: absolute;  object-fit: fill;">
    <h3 style="position: absolute;right: 10px;left: 850px;color:white;top:250px"> Welcome To EMPLOYEE MANAGEMENT SYSTEM!</h3>
    <h1 style="position: absolute;right: 10px;left:850px;color:white;top:300px"> This Webapplication Is About CRUD Peformed On The Employees Eata.</h1>
    <h1 style="position: absolute;right:10px;left: 850px;color:white;top:410px"> I Hope You Will Like It!</h3>
      <a href="./index.php#nav">
        <h1 class="text-light" style="text-decoration:solid;position: absolute;right: 430px;color:white;top:480px">GET STARTED!</h1>
      </a>
  </div>
  <div class="bg-info" style="right:0;bottom:0;left:0;display:flex;position:absolute;padding-top: 10px;padding-bottom:0">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-1">
            <p class="text-light"> &copy; <a class="fw-medium text-light" href="#">EMS.COM BY K.N.Soni</a>, All Right Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>