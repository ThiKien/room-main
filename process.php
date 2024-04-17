<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Xử lý dữ liệu hoặc gửi email, v.v.
    // Ở đây, chỉ hiển thị thông tin trong trình duyệt
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message;
}
?>