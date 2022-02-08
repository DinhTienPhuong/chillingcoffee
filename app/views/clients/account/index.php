@php
$check = Session::data('cus-id');
@endphp
@if(!empty($check))
@php
$respone = new Response();
$respone->redirect('trang-chu');
@endphp
@else    

<div class="container-scroller" >
  <div class="container-fluid page-body-wrapper full-page-wrapper" >
    <div class="content-wrapper d-flex align-items-center auth"  style="background-image:url({{_WEB_ROOT.'/public/frontend//images/bg_4.jpg'}})">
 
      <div style="-webkit-box-flex: 1;flex-grow: 1;display: flex;flex-wrap: wrap;margin-right: -9px;margin-left: -9px;" >
        <section class="ftco-section contact-section">   
          <div class="container mt-5" style="margin-left: 13%;">
            <div class="row block-9">
                <div class="col-md-4 contact-info ftco-animate">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                        <a href="{{_WEB_ROOT}}/trang-chu" class="container btn px-xl-4 py-xl-3 navbar-brand" style="padding-left: unset !important;text-align: left;"><p style="font-size:30px;color: white; text-transform: uppercase;">Chilling Coffee</p></a>

                            <h1 style="font-size:20px;color: white;" >Đăng Nhập</h1>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p style="text-align:justify;color: white;">Hãy đăng nhập để luôn không bỏ những khuyến mãi mới nhất cũng như những sự kiện được tổ chức tại quán</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                    <form action="{{_WEB_ROOT}}/dang-nhap-khach-hang" method="POST" class="contact-form" enctype="multipart/form-data" style="width: 80%;">
                        <div class="form-group">
                            <label for="bill_address" style="color: white;">Tên Đăng Nhập</label>
                            <input type="text" name="cus_user" id="cus_user" value="{!old('cus_user')!}" class="form-control" style="color: white !important;">
                            <span style="color:red;" class="form-message"> {!form_error('cus_user')!}</span>
                        </div>

                        <div class="form-group">
                            <label for="bill_address" style="color: white;">Mật Khẩu</label>
                            <input type="password" name="cus_pass" id="cus_pass" value="{!old('cus_pass')!}" class="form-control">
                            <div class="showmk" style="text-align: right;padding-top: 10px;">
                                <input id="showPass" hidden type="checkbox" onclick="myFunction()"><label for="showPass">Hiện mật khẩu</label>
                            </div>
                            <span style="color:red;" class="form-message"> {!form_error('cus_pass')!}</span>
                        </div>
                        <div class="form-group">
	                        <p class="breadcrumbs"><span class="mr-2"><a class="text-white" href="{{_WEB_ROOT}}/quen-mat-khau">Bạn quên mật khẩu?</a></span> </p>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Đăng Nhập" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                  
                </div>
            </div>
            </div>
            <div class="col-md-3 col-sm-3 ftco-animate" style="float:right;">
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{_WEB_ROOT}}/trang-chu">Trang chủ</a></span> <span><a href="{{_WEB_ROOT}}/dang-ky">Bạn chưa có tài khoản?</a></span></p>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>
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