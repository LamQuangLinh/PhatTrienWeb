<?php
$data = range(1, 100); 
$limit = 10; 
$page = isset($_GET['page']) ? $_GET['page'] : 1; 


$total_pages = ceil(count($data) / $limit);


$page = max($page, 1);
$page = min($page, $total_pages);


$start = ($page - 1) * $limit;
$end = $start + $limit;


$data_slice = array_splice($data, $start, $limit);


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
