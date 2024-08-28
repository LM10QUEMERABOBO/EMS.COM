<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Update User!
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
</head>

<body>

  <?php
  require("../connection/connection.php");
  $eid = $_GET['id'];
  $read = "select * from edata where eid=" . $eid;
  $res = mysqli_query($conn, $read);
  $row = mysqli_fetch_assoc($res);
  if (!$res) {
  ?>
    <script>
      alert("read unsucessfull!");
    </script>
  <?php
  } else {
  ?>
    <br>
    <br>
    <br>
    <!--Body starts-->
    <div class="container">

      <form class="well form-horizontal" action="updusr.php" method="post" id="contact_form">
        <fieldset>

          <!-- Form Name -->
          <legend>
            <center>
              <h2><b>Update Employee Information</b></h2>
            </center>
          </legend><br>

          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Employyee's Full Name</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="first_name" placeholder="First Name" class="form-control" id="name" type="text" value="<?php echo $row['ename']; ?>" required>

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
                <input name="last_name" placeholder="Salary(in INR)" class="form-control" id="sal" type="text" value="<?php echo $row['salary']; ?>">
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
                <input name="user_name" placeholder="Age" class="form-control" type="text" id="age" value="<?php echo $row['Age']; ?>">
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
                <input name="email" placeholder="E-Mail Address" class="form-control" type="text" id="mail" value="<?php echo $row['email']; ?>">
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
                <input name="contact_no" placeholder="+91 0000000000" class="form-control" type="text" id="mob" value="<?php echo $row['mobile']; ?>">
              </div>
            </div>
          </div>
          <br>
          <!-- Text input-->

          <div class="form-group">
            <label class="col-md-4 control-label">Employee's Address</label>
            <div class="col-md-4 inputGroupContainer">
              <div class="input-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="addr"><?php echo $row['address']; ?></textarea>
              </div>
            </div>
          </div>
          <br>
          <input type="hidden" name="id" value="<?php echo $row['eid']; ?>" />
          <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4"><br>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp&nbsp
              <button type="submit" name="update" class="btn btn-info">
                UPDATE
                <!-- <span class="glyphicon glyphicon-send"></span> -->
              </button>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="update.php" class="btn btn-danger" role="button">CANCEL</a>
            </div>
          </div>
        </fieldset>
      </form>
    <?php
  }
    ?>
    </div>
    </div>
</body>