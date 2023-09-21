<?php
    session_start();
    include("connection.php");

    $email = $_POST['uname'];
    $pass = $_POST['psw'];
    
    $time_stamp = date("Y-m-d H:i:s");
    $check = mysqli_query($connect, "select * from reg_details where email='$email' and pass='$pass'");
   

    if(mysqli_num_rows($check)>0){
        $check2 = mysqli_query($connect, "insert into log_details(email, time_login) values ('$email','$time_stamp')");
        $getGroups = mysqli_query($connect, "select email, pass from reg_details");
        
        if(mysqli_num_rows($getGroups)>0){
            $groups = mysqli_fetch_all($getGroups, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;
        echo '<script>
                window.location = "main.php";
            </script>';
          
    }
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "login.html";
            </script>';
    }
    

    
?>