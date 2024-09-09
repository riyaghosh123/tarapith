<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
  include("./config/db.php");
  if(isset($_POST['register'])){
    $user_name=mysqli_real_escape_string($con,$_POST['name']);
    $phone_no=($_POST['ph.no']);
    $whatapp_no=($_POST['what.no']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=($_POST['pass']);
    $confirm_password=($_POST['cpass']);

    
    $query="insert into signup(name,phone,whatapp,gmail,pass,cpass) values('$user_name',
      '$phone_no','$whatapp_no','$email','$password','$confirm_password')";
    
      
      if(mysqli_query($con,$query)){
        ?>
          <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "success",
                    title: "Registered Successfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "index.php";
                });
            });
            </script>
        <?php

      }else{
        ?>
          <script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    icon: "error",
                    title: "Registration Unsuccessfully",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "index.php";
                });
            });
            </script>
        <?php
      }
  }
?>