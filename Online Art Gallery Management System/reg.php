<?php
    include("connection.php");

    $email = $_POST['email'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $cpass = $_POST['pass_2'];
    
    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "register.html";
            </script>';
    }
    else{
        $insert = mysqli_query($connect, "insert into reg_details (email, fname, lname, gender, pass, cpass) values('$email', '$fname', '$lname', '$gender', '$pass', '$cpass') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "login.html";
                </script>';
        }
    }
    
?>



