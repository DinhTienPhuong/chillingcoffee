@php
$check = Session::data('user-id');
@endphp
@if(!empty($check))
@php
$respone = new Response();
$respone->redirect('dashboard');
@endphp
@else    

<style>
   ::placeholder {
  color: red;
}

  </style>
<div class="container-scroller" >
  <div class="container-fluid page-body-wrapper full-page-wrapper" >

    <div class="content-wrapper d-flex align-items-center auth" style="background-image:url(http://localhost/chillingcoffee/public/backend//images/bg.jpg); background-size: 100% 100%;">
      <div class="row flex-grow" >
        <div class="col-lg-4 mx-auto" style="background-color: rgba(0, 0, 0, 0.5);" >
       

          <div class="text-left p-5">
            <div class="brand-logo">
            <h1 style="color: white;text-align:center;">Chilling Coffee</h1>
         
            </div>
            <h4 style="color:white;">Xin chào!</h4>
            <h6 class="font-weight-light" style="color:white;">Đăng nhập để tiếp tục.</h6>

            @php
            $errors = Session::flash('errors');
            @endphp
            @if (!empty($errors))
            <div class="alert alert-danger" role="alert">
              {{ $errors }}
            </div>
            @endif

            @php
            $msg = Session::flash('msg');
            @endphp
            @if (!empty($msg))
            <div class="alert alert-success" role="alert">
              {{ $msg }}
            </div>
            @endif
            <form class="pt-3" method="post" action="{{_WEB_ROOT}}/admin-login">
              <div class="form-group">
                <input type="text" name="userNV" class="form-control form-control-lg color_placehodel" id="exampleInputEmail1" placeholder="Tên đăng nhập" style="color : white" >
                <span class="form-message">{!form_error('userNV')!}</span>
              </div>
              <div class="form-group">
                <input type="password" name="pwNV" class="form-control form-control-lg color_placehodel" id="exampleInputPassword1" placeholder="Mật khẩu" style="color : white">
                <div class="showmk" style="padding-top: 10px;text-align: right;">
                  <input id="showPass" hidden type="checkbox" onclick="myFunction()"><label for="showPass">Hiện mật khẩu</label>
                  <span class="form-message">{!form_error('pwNV')!}</span>
                </div>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Đăng nhập</button>
              </div>
              <div class="my-2 d-flex align-items-center">
                <a href="#" style="text-align: center ; color:white "class="auth-link" >Quên mật khẩu?</a>
              </div>
              <div class="text-center mt-4 font-weight-light"> Bạn chưa có có tài khoản?
                <a href="{{_WEB_ROOT}}/register" style="color : white" >Tạo tài khoản</a>
              </div>
            </form>
            <div class="mb-2 ">
              <a href="{{_WEB_ROOT}}/trang-quan-tri">
                <button  style="font-size: inherit;" class="btn btn-block btn- auth-form-btn">
                <i style="font-size: inherit;"class="mdi mdi-home"></i> Quay về trang chủ </button>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
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