<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee";

  // Create connection
  
  $conn = new mysqli($servername, $username, $password,$dbname);
  
  // Check connection
  
  if (!$conn) {
  ?>
    <script>
      alert("Database connection failed!");
      window.top.location="../index.php";
    </script>
  <?php
}