<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth "  style="background-image:url(http://localhost/chillingcoffee/public/backend//images/bg.jpg); background-size: 100% 100%;">
      <div class="row flex-grow">
        <div class="col-lg-4 mx-auto" style="background-color: rgba(0, 0, 0, 0.5);">
          <div class="text-left p-5">
            <div class="brand-logo">
              <h1 style="text-align:center;color: white;">Chilling Coffee</h1>
            </div>
            <h4 style="color:white">Đăng ký?</h4>
            <h6 class="font-weight-light" style="color:white">Đăng ký ngay để tiếp tục</h6>
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
            <form class="forms-sample" method="POST" action="{{ _WEB_ROOT}}/admin-register">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg color_placehodel" name="regis-user" id="regis-user" placeholder="Tên đăng nhập" style="color:white" >
              </div>
              <span class="form-message">
                  {!form_error('regis-user')!}
                </span>
              <div class="form-group">
                <input type="text" class="form-control form-control-lg color_placehodel" name="regis-name" id="regis-name" placeholder="Tên người dùng" style="color:white">
              </div>
              <span class="form-message">
                  {!form_error('regis-name')!}
                </span>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg color_placehodel" name="regis-pw" id="regis-pw" placeholder="Password">
                <div class="showmk" style="padding-top: 10px;text-align: right;">
                <input id="showPass" hidden type="checkbox" onclick="myFunction()"><label for="showPass">Hiện mật khẩu</label>
              </div>
              <span class="form-message">
                  {!form_error('regis-pw')!}
                </span>
              </div>
        
            
              <!-- <div class="mb-4"> -->
                <!-- <div class="form-check">
                    <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div> -->
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Đăng ký</button>
                </div>
            </form>
            <div class="text-center mt-4 font-weight-light"> Bạn đã có có tài khoản?
              <a href="{{_WEB_ROOT}}/login" class="" style="color:white">Đăng nhập</a>
            </div>

          </div>
        </div>
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
        var x = document.getElementById("regis-pw");
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

  
</script>