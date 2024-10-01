<?php
// Bắt đầu phiên
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Lấy ID người dùng cần xóa và ID của người dùng đang đăng nhập
$userIdToDelete = NULL; 
$currentUserId = $_SESSION['id']; 

if (!empty($_GET['id'])) {
    $userIdToDelete = $_GET['id'];

    // Kiểm tra xem người dùng có cố gắng xóa tài khoản của chính họ không
    if ($userIdToDelete == $currentUserId) {
        $userModel->deleteUserById($userIdToDelete); // Xóa người dùng
        $_SESSION['message'] = 'Tài khoản đã được xóa thành công.';
        header('location: list_users.php'); // Quay lại danh sách người dùng
        exit();
    } else {
        // Hiển thị thông báo không có quyền
        $_SESSION['message'] = 'Không có quyền xóa tài khoản.';
        header('location: list_users.php'); // Quay lại danh sách người dùng
        exit();
    }
}

// Nếu không có ID trong URL
$_SESSION['message'] = 'ID người dùng không hợp lệ.';
header('location: list_users.php'); // Quay lại danh sách người dùng
exit();
?>