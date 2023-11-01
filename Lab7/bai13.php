<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = $_FILES['file']; // Lấy thông tin về tập tin đã tải lên
    $filename = $file['name']; // Lấy tên của tập tin
    $tmp_name = $file['tmp_name']; // Lấy đường dẫn tạm thời của tập tin
    $target_dir = 'uploads/'; // Thư mục lưu trữ tập tin đã tải lên
    $target_file = $target_dir . basename($filename); // Đường dẫn đến tập tin đã tải lên

    if (is_uploaded_file($tmp_name)) { // Kiểm tra xem tập tin đã được tải lên chưa
        if (move_uploaded_file($tmp_name, $target_file)) { // Di chuyển tập tin vào thư mục lưu trữ
            echo 'Tập tin đã được tải lên thành công!';
        } else {
            echo 'Có lỗi xảy ra khi di chuyển tập tin!';
        }
    } else {
        echo 'Không có tập tin nào được tải lên!';
    }
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
