<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $number = $_POST["number"];

    // 入力が3桁の数字か確認
    if (is_numeric($number) && $number >= 000 && $number <= 999) {
        echo "入力された3桁の数字は: " . htmlspecialchars($number);
    } else {
        echo "3桁の数字を正しく入力してください。";
    }
} else {
    echo "フォームが正しく送信されませんでした。";
}
?>
