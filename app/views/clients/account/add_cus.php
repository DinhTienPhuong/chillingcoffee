@php
$check = Session::data('user-id');
@endphp
@if(!empty($check))
@php
$respone = new Response();
$respone->redirect('dashboard');
@endphp
@else    

<div class="container-scroller" >
    <div class="container-fluid page-body-wrapper full-page-wrapper" >
        <div class="content-wrapper d-flex align-items-center auth"  style="background-image: url({{_WEB_ROOT.'/public/frontend/images/bg_4.jpg'}});">
 
            <div style="-webkit-box-flex: 1;flex-grow: 1;display: flex;flex-wrap: wrap;margin-right: -9px;margin-left: -9px;" >
                <section class="ftco-section contact-section">   
                    <div class="container mt-5" style="margin-left: 13%;">
                        <div class="row block-9">
                            <div class="col-md-4 contact-info ftco-animate">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <a href="{{_WEB_ROOT}}/trang-chu" class="container btn px-xl-4 py-xl-3 navbar-brand" style="padding-left: unset !important;text-align: left;"><p style="font-size:30px;color: white; text-transform: uppercase;">Chilling Coffee</p></a>
                                        <h1 style="font-size:20px;color: white;">Đăng Ký Ngay</h1>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p style="text-align:justify;color: white;">Luôn cập nhật những tin tức mới nhất về các chương trình khuyến mãi cũng như thưởng thức món mới của bổn tiệm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6 ftco-animate">
                                <form action="{{_WEB_ROOT}}/customer-save" method="POST" class="contact-form" enctype="multipart/form-data" style="width: 80%;">
                                    
                                    <div class="form-group">
                                        <label for="bill_address"style="color: white;">Tên Người Dùng</label>
                                        <input type="text" name="cus_name" id="cus_name" value="{!old('cus_name')!}" class="form-control">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_name')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="bill_address" style="color: white;">Số Điện Thoại</label>
                                        <input type="tel" name="cus_sdt" id="cus_sdt" value="{!old('cus_sdt')!}" class="form-control">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_sdt')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="bill_address" style="color: white;">Địa chỉ</label>
                                        <input type="text" name="cus_address" id="cus_address" value="{!old('cus_address')!}" class="form-control">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_address')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="bill_address" style="color: white;">Mail của bạn</label>
                                        <input type="mail" name="email" id="email" value="{!old('email')!}" class="form-control">
                                        <span style="color:red;" class="form-message"> {!form_error('email')!}</span>
                                    </div>

                                    <div class="form-group" style="color: white;">
                                        <label for="bill_address">Tên Đăng Nhập</label>
                                        <input type="text" name="cus_user" id="cus_user" value="{!old('cus_user')!}" class="form-control">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_user')!}</span>
                                    </div>

                                    <div class="form-group" style="color: white;">
                                        <label for="bill_address">Mật Khẩu</label>
                                        <input type="password" name="cus_pass" id="cus_pass" value="{!old('cus_pass')!}" class="form-control">
                                        <div class="showmk" style="text-align: right;padding-top: 10px;">
                                            <input id="showPass" hidden type="checkbox" onclick="myFunction()"><label for="showPass">Hiện mật khẩu</label>
                                        </div>
                                        <span style="color:red;" class="form-message"> {!form_error('cus_pass')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="bill_address" style="color: white;">Nhập lại Mật Khẩu</label>
                                        <input type="password" name="pass_confirm" id="pass_confirm" value="{!old('pass_confirm')!}" class="form-control">
                                        <div class="showmk" style="text-align: right;padding-top: 10px;">
                                            <input id="showPass" hidden type="checkbox" onclick="myFunction()"><label for="showPass">Hiện mật khẩu</label>
                                        </div>
                                        <span style="color:red;" class="form-message"> {!form_error('pass_confirm')!}</span>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="submit" value="Đăng Ký" class="btn btn-primary py-3 px-5">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 ">
                        <a href="{{_WEB_ROOT}}/trang-chu">
                            <button  style="font-size: inherit;" class="btn btn-block btn- auth-form-btn">
                            <i style="font-size: inherit;"class="mdi mdi-home"></i> Quay về trang chủ </button>
                        </a>
                    </div>
                </section>
            </div>
        </div>
     

    
    <!-- content-wrapper ends -->
  </div>
 
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script>
    function myFunction() {
        var x = document.getElementById("exampleInputPassword1");
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
@endif