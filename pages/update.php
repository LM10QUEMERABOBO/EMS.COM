<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    Update user
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
  // $i=1;
  if (mysqli_num_rows($result) <= 1) {
  ?>
    <script>
      alert("NO entry in the database!");
      window.top.location = "index.php"
    </script>
  <?php
  } else {
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


    <!--Body starts-->
    <h2 class="display-6">
      <center>This page used to update the employee data.</center>
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
          <th scope="col">Update employee</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($row = $result->fetch_assoc()) {
          $url = "update_user.php?id=" . urlencode($row['eid']);
          $i = $row['eid'] - 1;
          echo "<tr>";
          echo "<th scope='row'>" . $i . "</th>";
          echo "<td>" . $row['ename'] . "</td>";
          echo "<td>" . $row['salary'] . "</td>";
          echo "<td>" . $row['Age'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['mobile'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" ?>
          <a href=<?php echo $url; ?>>
            <button type="button" class="btn btn-outline-info btn-rounded" data-mdb-ripple-init>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325" />
              </svg>
              <!-- <i class="bi bi-pencil"></i> -->
            </button>
          </a>
      <?php
          "</td>";
          echo "</tr>";
          // $i++;
        }
      }
      ?>
      </tbody>
    </table>

    <!-- Body ends-->
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