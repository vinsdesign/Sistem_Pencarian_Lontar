<?php
session_start();
require './apps/config/config.php';

if (isset($_COOKIE['key'])) {
    $key = $_COOKIE['key'];

    // ambil key -> username berdasarkan username didatabase
    $result = mysqli_query($koneksi, "SELECT username FROM admin WHERE username = '$key'");
    $row = mysqli_fetch_assoc($result);
    // cek username
    if ($key === hash('sha224', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

// cek session jika sudah ada session langsung arahin ke   --
if (isset($_SESSION['login'])) {
    header("Location:/DashboardAdmin");
    exit;
}

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

            // set remember me
            if (isset($_POST['remember'])) {
                // set_cookie
                setcookie('key', hash('sha224', $row['username']), time() + 240);
            }
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
