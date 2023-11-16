<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repass = $_POST['repass'];

    // Tạo một mảng chứa thông tin người dùng
    $user = [
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'repass' => $repass,
    ];

    // Lưu thông tin người dùng vào một file văn bản
    $userData = json_encode($user); // Chuyển đổi thành chuỗi JSON
    file_put_contents('users.txt', $userData . PHP_EOL, FILE_APPEND); // Lưu vào file văn bản

    // Chuyển hướng người dùng đến trang đăng nhập sau khi đăng ký thành công
    header("Location: dn.php");
    exit();
}
?>
