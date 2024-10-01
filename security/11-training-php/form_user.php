<?php
// Start the session
session_start();

require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL;
$_id = NULL;
$errors = [];

// Giải mã id và lấy thông tin người dùng nếu có
if (!empty($_GET['id'])) {
    $_id = base64_decode($_GET['id']); // Giải mã ID từ base64
    if (is_numeric($_id)) {
        $user = $userModel->findUserById($_id);
    } else {
        $errors['id'] = 'ID không hợp lệ.';
    }
}

// Xử lý form khi submit
if (!empty($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Validate name
    if (empty($name)) {
        $errors['name'] = 'Tên không được để trống.';
    } elseif (!preg_match("/^[a-zA-Z0-9]{5,15}$/", $name)) {
        $errors['name'] = 'Tên chỉ chứa ký tự chữ, số và có độ dài từ 5 đến 15 ký tự.';
    }

    // Validate password
    if (empty($password)) {
        $errors['password'] = 'Mật khẩu không được để trống.';
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()])[a-zA-Z\d!@#$%^&*()]{5,10}$/", $password)) {
        $errors['password'] = 'Mật khẩu phải chứa chữ thường, chữ hoa, số, ký tự đặc biệt và dài từ 5 đến 10 ký tự.';
    }

    // Nếu không có lỗi, thực hiện cập nhật hoặc thêm người dùng
    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST); // Cập nhật thông tin người dùng
        } else {
            $userModel->insertUser($_POST); // Thêm người dùng mới
        }
        header('location: list_users.php');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode('<br>', $errors); ?>
            </div>
        <?php } ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo base64_encode($_id); ?>">
                
                <!-- Form group for Name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value="<?php echo $user[0]['name'] ?? '' ?>">
                    <?php if (isset($errors['name'])) { ?>
                        <div class="alert alert-danger"><?php echo $errors['name']; ?></div>
                    <?php } ?>
                </div>

                <!-- Form group for Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (isset($errors['password'])) { ?>
                        <div class="alert alert-danger"><?php echo $errors['password']; ?></div>
                    <?php } ?>
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                User not found or invalid ID!
            </div>
        <?php } ?>
    </div>
</body>
</html>
