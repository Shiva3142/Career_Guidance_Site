<?php
include 'database_connection.php';
if (isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $phone = $_POST['phone'];
    $initialsql = "SELECT * FROM `users` WHERE `email`='$email'";
    $initialresult = mysqli_query($conn, $initialsql);
    $num = mysqli_num_rows($initialresult);
    if ($num == 1) {
        header("location:login.php?form_type=register&error=alreadyregistered");
    } else {
        $sql = "INSERT INTO `users`(`name`, `email`, `password`,`phone`) VALUES ('$name','$email','$password','$phone')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            header("location:index.php");
        } else {
            header("location:login.php?form_type=register&error=some error occured");
        }
    }
}

?>