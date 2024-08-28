<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Read all the user Information!
  </title>
  <link rel="website icon" type="png" href="./Images/emp_image.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!-- connection starts-->
  <?php
  require("../connection/connection.php");
  $q1 = "SELECT * FROM edata";
  $result = mysqli_query($conn, $q1);
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) <= 1) {
  ?>
    <script>
      alert("NO entry in the database!");
      window.top.location = "../index.php"
    </script>
  <?php
  }
  // $i=1;
  ?>
  <!-- connection ends-->

  <!-- navbar starts -->
  <h2 class="text-info"><a class="navbar-brand" href="../index.php">EMPLOYEE MANAGEMENT SYSTEM</a></h2>
  <nav class="navbar navbar-expand-lg bg-info ">
    <div class="container-fluid">
      <!-- <abbr title="EMPLOYEE MANAGEMENT SYSTEM"><a class="navbar-brand" href="../index.php">E.M.S</a></abbr> -->
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
  </nav>
  <!-- navbar ends -->
  <h2 class="display-6">
    <center>This page display all the employees information which are stored on the database.</center>
  </h2>
  <br>
  <!-- <form action="create.php" method="post"></form> -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">EMP_NO</th>
        <th scope="col">Employee Name</th>
        <th scope="col">Salary</th>
        <th scope="col">Age</th>
        <th scope="col">Email id</th>
        <th scope="col">Moblie no</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row = $result->fetch_assoc()) {

        echo "<tr>";
        $i = $row['eid'] - 1;
        echo "<th scope='row'>" . $i . "</th>";
        echo "<td>" . $row['ename'] . "</td>";
        echo "<td>" . $row['salary'] . "</td>";
        echo "<td>" . $row['Age'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>

  <!--footer starts-->
  <!-- <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-info">
        <div class="col-md-4 d-flex align-items-center">
          <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
            <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          </a>
          <span class="mb-3 mb-md-0 text-body-secondary">© 2024 Company, Inc</span>
        </div>
      </footer> -->
  <!-- footer ends-->
</body>