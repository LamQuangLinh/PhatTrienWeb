<?php
$file ='C:\Users\cict\Desktop\PHP\bai10.php'; // Đường dẫn tới tập tin cần chỉnh sửa

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content']; // Lấy nội dung đã chỉnh sửa từ form
    file_put_contents($file, $content); // Ghi lại nội dung đã chỉnh sửa vào tập tin ban đầu
}

$content = file_get_contents($file); // Lấy nội dung của tập tin
?>

<form method="post">
    <textarea name="content"><?php echo htmlspecialchars($content); ?></textarea> <!-- Hiển thị nội dung của tập tin trong form -->
    <input type="submit" value="Save">
</form>
