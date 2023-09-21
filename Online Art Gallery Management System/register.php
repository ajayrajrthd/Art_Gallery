<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="kala kendra";

$conn=mysqli_connect($server_name, $username, $password, $database_name);
//checking the connection
if(!$conn)
{
   die("Connetion Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
     $email = $_POST['email'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $gender = $_POST['gender'];
     $pass = $_POST['pass'];
     $confirm_pass = $_POST['pass_2'];

     $sql_query = "INSERT INTO reg_details (email, fname, lname, gender, pass, cpass) 
     VALUES ('$email' ,'$first_name' ,'$last_name' ,'$gender' ,'$pass', '$confirm_pass')";

     if(mysqli_query($conn, $sql_query))
     {
      echo '<script>alert("User Created!")</script>';
      header("location:login.html");
     }
     else
     { 
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>