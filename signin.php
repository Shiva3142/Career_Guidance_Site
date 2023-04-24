<?php
include 'database_connection.php';
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        header("location:index.php");
    } else {
        header("location:login.php?error=wrongpassword");
    }
}
?>