<?php
require 'connection.php';
$conn = mysqli_connect("localhost", "root", "", "kala kendra");

session_start();

$user_check=$_SESSION['login_user2'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT email FROM log_details WHERE email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
?>