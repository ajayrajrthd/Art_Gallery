<?php
    include("connection.php");

     $fname = $_POST['fname'];
     $email = $_POST['email'];
     $address = $_POST['adr'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $cname = $_POST['cname'];
     $ccnum = $_POST['ccnum'];
     $exp_month = $_POST['expmonth'];
     $exp_year = $_POST['expyear'];
     $cvv = $_POST['cvv'];
    
    {
        $insert = mysqli_query($connect, "insert into credit_details (fname, email, address, city, state, cname, cno, exp_month, exp_year, cvv) 
        VALUES ('$fname' ,'$email' ,'$address' ,'$city' ,'$state', '$cname', '$ccnum', '$exp_month', '$exp_year', '$cvv')");
        if($insert){
            echo '<script>
               
                    alert("Redirecting....");

                </script>';
                         header("Location: https://rzp.io/i/pDXiYnukmR");
                         exit;
            }
    }
    
?>















$fname = $_POST['fname'];
     $email = $_POST['email'];
     $address = $_POST['adr'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $pincode = $_POST['zip'];
     $cname = $_POST['cname'];
     $ccnum = $_POST['ccnum'];
     $exp_month = $_POST['expmonth'];
     $exp_year = $_POST['expyear'];
     $cvv = $_POST['cvv'];

     $sql_query = "INSERT INTO credit_details (fname, email, address, city, state, cname, cno, exp_month, exp_year, cvv) 
     VALUES ('$email' ,'$first_name' ,'$last_name' ,'$gender' ,'$pass', '$confirm_pass')";