<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userData = [
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];

    // Lấy nội dung từ tệp văn bản nếu tệp đã tồn tại
    $fileData = [];
    if (file_exists('user.txt')) {
        $fileData = json_decode(file_get_contents('user.txt'), true);
    }

    // Thêm thông tin người dùng mới vào mảng dữ liệu đã có
    $fileData[] = $userData;

    // Lưu thông tin người dùng vào tệp văn bản
    $jsonData = json_encode($fileData);
    file_put_contents('dangnhap.txt', $jsonData);

    echo "Đăng ký thành công!";
}
?>
