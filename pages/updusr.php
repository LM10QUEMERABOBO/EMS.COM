<?php
require("../connection/connection.php");
if (isset($_POST['update'])) {
  $empid = $_POST['id'];
  $name = $_POST['first_name'];
  $salary = $_POST['last_name'];
  $age = $_POST['user_name'];
  $email = $_POST['email'];
  $mobile = $_POST['contact_no'];
  $add = $_POST['addr'];
  $q2 = "update edata set ename='" . $name . "',salary='" . $salary . "',Age='" . $age . "',email='" . $email . "',mobile='" . $mobile . "',address='" . $add . "' where eid='" . $empid . "'";
  mysqli_query($conn, $q2);
  if ($q2) {
?>
    <script>
      alert("Data updated Successfully!");
      window.top.location = 'update.php';
    </script>
  <?php
  } else {
  ?>
    <script>
      alert("Error!");
      window.top.location = 'update.php';
    </script>
<?php
  }
}
?>