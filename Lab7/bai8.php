<?php
$pattern = '/^[a-zA-Z0-9]*$/'; // Biểu thức chính quy
$input = 'abc123-'; // Chuỗi đầu vào

if (preg_match($pattern, $input)) {
    echo 'Khớp!';
} else {
    echo 'Không khớp!';
}
?>
