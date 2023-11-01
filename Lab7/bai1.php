<?php
$data = range(1, 100); // Dữ liệu cần phân trang
$limit = 10; // Số lượng phần tử trên mỗi trang
$page = isset($_GET['page']) ? $_GET['page'] : 1; // Trang hiện tại

// Tính toán số lượng trang
$total_pages = ceil(count($data) / $limit);

// Giới hạn trang hiện tại trong khoảng từ 1 đến tổng số trang
$page = max($page, 1);
$page = min($page, $total_pages);

// Tính toán vị trí bắt đầu và kết thúc của phần tử trên trang hiện tại
$start = ($page - 1) * $limit;
$end = $start + $limit;

// Lấy các phần tử cần hiển thị trên trang hiện tại
$data_slice = array_splice($data, $start, $limit);

// Hiển thị dữ liệu và phân trang
foreach ($data_slice as $item) {
    echo $item . "<br>";
}

echo "<br>";

for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page) {
        echo "$i ";
    } else {
        echo "<a href=\"?page=$i\">$i</a> ";
    }
}
?>
