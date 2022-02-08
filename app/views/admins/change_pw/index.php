<?php
if (session_id() == '') session_start();
if (isset($_SESSION['login_user']) == false) {
    header("Location: index.php?page=dangnhap");
    exit();
}
$ten = $_SESSION['login_user'];

?>
<style>
    .doimatkhau form {
        padding-top: 0;
    }

    .doimatkhau {
        margin: 2rem auto;
        background: white;
        border-radius: .5rem;
    }

    .form-group .showmk {
        text-align: right;
        font-style: italic;
        font-size: 1rem;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="doimatkhau col-8 border ">
    <form action="index.php?page=requestChangepass" method="post" id="frmlogin">
        <h2 class="p-3 my-0 mx-n3">Đổi mật khẩu</h2>
        <hr>
        <div class="form-group">
            <label>Tên đăng nhập: </label>
            @if 
            <input name="ten" type="text" class="form-control" value="<?= $ten ?>" />
        </div>
        <div class="form-group">
            <label>Mật khẩu cũ</label> <input name="pass_old" type="password" id="myInput" class="form-control" />
            <div class="showmk">
                <input id="showPass" hidden type="checkbox" onclick="myFunction()"><label for="showPass">Hiện mật khẩu</label>
            </div>
        </div>
        <div class="form-group">
            <label>Mật khẩu mới</label> <input name="pass_new1" type="password" id="myInput2" class="form-control" />
            <div class="showmk">
                <input id="showPass2" hidden type="checkbox" onclick="myFunction2()"><label for="showPass2">Hiện mật khẩu</label>
            </div>
        </div>
        <div class="form-group">
            <label>Nhập lại mật khẩu mới</label> <input name="pass_new2" type="password" id="myInput3" class="form-control" />
            <div class="showmk">
                <input id="showPass3" hidden type="checkbox" onclick="myFunction3()"><label for="showPass3">Hiện mật khẩu</label>
            </div>
        </div>
        <div class="form-group">
            <input name="btn" type="submit" value="Cập nhật" class="btn btn-primary" />
        </div>
    </form>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunction2() {
        var x = document.getElementById("myInput2");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

    function myFunction3() {
        var x = document.getElementById("myInput3");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>