<?php
if (isset($_POST['data'])) {
    $html = '<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Phiếu Thống Kê Đảng Viên</title>
<style>
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid black; padding: 5px; text-align: center; }
    th { background-color: #f2f2f2; }
    h2, h3 { text-align: center; margin: 5px 0; }
</style>
</head>
<body>
<h2>PHIẾU THỐNG KÊ ĐẢNG VIÊN</h2>
<h3>ĐÃ HOÀN THÀNH ĐỔI THẺ VÀ CHƯA HOÀN THÀNH ĐỔI THẺ ĐẢNG VIÊN</h3>'
    . $_POST['data'] .
'</body>
</html>';

    file_put_contents("bang_dangvien.html", $html);
    echo "Đã lưu thành công!";
} else {
    echo "Không có dữ liệu để lưu!";
}
