<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thi trắc nhiệm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
    .errorMsg{
        color:red;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-4 mx-auto formLogin">
            <form action="./login" method="POST" novalidate>
                <div class="form-group">
                    <label class="label">Tên người dùng : </label>
                    <input type="text" class="form-control" name="username" placeholder="Nhập tên người dùng ...">
                </div>
                <div class="form-group">
                    <label class="label">Mật khẩu người dùng</label>
                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu người dùng ...">
                </div>
                <button class="form-control">Đăng nhập</button>
            </form>
            <span class="errorMsg">
                <?php if(isset($_GET['msg'])){
                    echo $_GET['msg'];
                } ?>
            </span>
        </div>
    </div>
</body>
</html>