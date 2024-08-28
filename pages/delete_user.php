<?php
require("../connection/connection.php");
$id = $_GET['id'];
$del = "delete from edata where eid=$id";
$rs = mysqli_query($conn, $del);
if ($rs) {
?>
    <script>
        alert("User deleted successfully!");
        window.top.location = 'delete.php';
    </script>
<?php

} else {
?>
    <script>
        alert("Error in deleting!");
        window.top.location = 'delete.php';
    </script>
<?php
}

?>