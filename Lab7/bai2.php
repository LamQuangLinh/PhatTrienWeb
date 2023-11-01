<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
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
                exit();
            }
            $result = $num1 / $num2;
            break;
        default:
            echo 'Phép tính không hợp lệ!';
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