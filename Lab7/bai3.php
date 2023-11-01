<?php
$day = 15; // Ngày sinh
$month = 8; // Tháng sinh

if (($month == 3 && $day >= 21) || ($month == 4 && $day <= 19)) {
    echo "Bạn thuộc chòm sao Bạch Dương";
} elseif (($month == 4 && $day >= 20) || ($month == 5 && $day <= 20)) {
    echo "Bạn thuộc chòm sao Kim Ngưu";
} elseif (($month == 5 && $day >= 21) || ($month == 6 && $day <= 21)) {
    echo "Bạn thuộc chòm sao Song Tử";
} elseif (($month == 6 && $day >= 22) || ($month == 7 && $day <= 22)) {
    echo "Bạn thuộc chòm sao Cự Giải";
} elseif (($month == 7 && $day >= 23) || ($month == 8 && $day <= 22)) {
    echo "Bạn thuộc chòm sao Sư Tử";
} elseif (($month == 8 && $day >= 23) || ($month == 9 && $day <= 22)) {
    echo "Bạn thuộc chòm sao Xử Nữ";
} elseif (($month == 9 && $day >= 23) || ($month == 10 && $day <= 23)) {
    echo "Bạn thuộc chòm sao Thiên Bình";
} elseif (($month == 10 && $day >= 24) || ($month == 11 && $day <= 21)) {
    echo "Bạn thuộc chòm sao Bọ Cạp";
} elseif (($month == 11 && $day >= 22) || ($month == 12 && $day <= 21)) {
    echo "Bạn thuộc chòm sao Nhân Mã";
} elseif (($month == 12 && $day >= 22) || ($month == 1 && $day <= 19)) {
    echo "Bạn thuộc chòm sao Ma Kết";
} elseif (($month == 1 && $day >= 20) || ($month == 2 && $day <=18)) {
    echo "Bạn thuộc chòm sao Bảo Bình";
} else {
    echo "Bạn thuộc chòm sao Song Ngư";
}
?>
