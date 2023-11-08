<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {//kiểm tra xem phương thức HTTP được sử dụng có phải là POST hay không. Nếu đúng, nó sẽ tiếp tục thực hiện các lệnh trong khối lệnh này.
    $num1 = $_POST['num1']; //Dòng 3-5: Lấy giá trị của các biến num1, num2 và operator từ form được gửi đi.
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) { //Dòng 7-18: Sử dụng câu lệnh switch để thực hiện các phép tính cơ bản. Nếu operator là +, result sẽ được gán bằng num1 + num2. Tương tự cho các phép tính khác.
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 == 0) {
                echo 'Không thể chia cho 0!';
                exit(); //Dòng 20-23: Nếu num2 bằng 0, chương trình sẽ in ra thông báo “Không thể chia cho 0!” và kết thúc chương trình.
            }
            $result = $num1 / $num2;
            break;
        default:
            echo 'Phép tính không hợp lệ!'; //Dòng 25-28: In ra kết quả tính toán.
            exit();
    }

    echo "Kết quả: $result";
}
?>

<form method="post">
    <input type="number" name="num1" required>
    <select name="operator" required>
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="number" name="num2" required>
    <input type="submit" value="Tính">
</form>