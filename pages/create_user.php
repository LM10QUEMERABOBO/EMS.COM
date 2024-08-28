<?php
require("../connection/connection.php");

    if (isset($_POST['submit'])) {   
        $nm = mysqli_real_escape_string($conn, $_POST['first_name']);
        $sal = mysqli_real_escape_string($conn, $_POST['last_name']);
        $age = mysqli_real_escape_string($conn, $_POST['user_name']);
        $mail = mysqli_real_escape_string($conn, $_POST['email']);
        $num = mysqli_real_escape_string($conn, $_POST['contact_no']);
        $add = mysqli_real_escape_string($conn, $_POST['eadd']);
        $sl = "select * from edata where ename='$nm' and email='$mail'";
        $result = mysqli_query($conn, $sl);

        if (mysqli_num_rows($result) == 1) {
    ?>
            <script>
                alert("This Employee is already registered, try another!");
            </script>
            <?php
        } else {
            //Insert into the data in the table.
            $in = "insert into edata(ename,salary,Age,email,mobile,address) VALUES('$nm', '$sal','$age','$mail','$num','$add')";
            $q3 = mysqli_query($conn, $in);
            if ($in) {
            ?>
                <script>
                    alert('Employee registered Sucessfully!');
                    window.top.location="create.php";
                </script>
<?php
            }
        }
 }
?>