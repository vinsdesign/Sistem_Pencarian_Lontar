<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location:/DashboardAdmin");
    exit;
}

require './apps/config/config.php';
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $result = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username'");
    // cek username
    if (mysqli_num_rows($result) === 1) { //mysqli_num_rows => ada berapa baris yang dikembalikan

        // check password
        $row = mysqli_fetch_assoc($result);
        if ($password === $row["password"]) {
            // set session
            $_SESSION["login"] = true;
            // Password cocok, redirect ke halaman DashboardAdmin
            header("location: /DashboardAdmin");
            $success = true;
            exit;
        } else {
            // Password tidak cocok, set pesan error
            $error = true;
        }
    }
    $error = true;
    $success = true;
}
