<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create new records!</title>
  <link rel="website icon" type="png" href="./Images/emp_image.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>

<body>

  <!-- connection starts-->
  <?php
  require("../connection/connection.php");
  ?>
  <!-- connection ends-->


  <!-- navbar starts -->
  <!-- <nav class="navbar navbar-expand-lg bg-info ">
    <div class="container-fluid">
      <abbr title="EMPLOYEE MANAGEMENT SYSTEM"><a class="navbar-brand" href="index.php">E.M.S</a></abbr>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="create.php">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="read.php">Read</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="update.php">Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="delete.php">Delete</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->

  <!-- navbar ends -->

  <!--Body starts-->
  <br>
  <br>
  <br>
  <div class="container">

    <form class="well form-horizontal" action="create_user.php" method="post" id="contact_form">
      <fieldset>

        <!-- Form Name -->
        <legend>
          <center>
            <h2><b>Registration Form</b></h2>
          </center>
        </legend><br>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Employyee's Full Name</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="first_name" placeholder="First Name" class="form-control" type="text" id="ename" name="ename" required>
            </div>
          </div>
        </div>
        <br>
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Employee's Salary</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="last_name" placeholder="Salary(in INR)" class="form-control" type="text" id="esal" name="esal" required>
            </div>
          </div>
        </div>
        <br>
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Employee's Age</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="user_name" placeholder="Age" class="form-control" type="text" id="eage" name="eage" required>
            </div>
          </div>
        </div>
        <br>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label">Employee's E-Mail</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <input name="email" placeholder="E-Mail Address" class="form-control" type="text" id="mail" name="mail" required>
            </div>
          </div>
        </div>
        <br>
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Employee's Contact No.</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <input name="contact_no" placeholder="+91 0000000000" class="form-control" type="text" id="enum" name="enum" required>
            </div>
          </div>
        </div>
        <br>
        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Employee's Address</label>
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="eadd" required></textarea>
            </div>
          </div>
        </div>
        <br>
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <br>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp
            <button type="submit" class="btn btn-info" name="submit">SUBMIT
              <span class="glyphicon glyphicon-send"></span>
              <!-- <i class="bi bi-send"></i> -->
              <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
              </svg> -->
            </button>
            &nbsp&nbsp&nbsp&nbsp
            <a href="../index.php" class="btn btn-danger" role="button">CANCEL</a>
          </div>
        </div>

      </fieldset>
    </form>
  </div>
  </div>
</body>

</html>