  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper" style="background-image:url(http://localhost/chillingcoffee/public/backend//images/bg.jpg); background-size: 100% 100%;">
          <div class="page-header">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#"   style="color: white;">Thông tin nhân viên</a></li>
                      <li class="breadcrumb-item active"  style="color: white;" aria-current="page">Thông tin</li>
                  </ol>
              </nav>
          </div>
          <div class="row" >

              <div class="col-12 grid-margin stretch-card" >
                  <div class="card" style="background-color: rgba(0, 0, 0, 0.5);">
                      <div class="card-body">
                          <h4 class="card-title" style="color: white;">Thông tin cá nhân</h4>
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
                          <div class="container-fluid">
                              <!-- ============================================================== -->
                              <!-- Start Page Content -->
                              <!-- ============================================================== -->
                              <!-- Row -->
                              <div class="row">
                                  <!-- Column -->
                                  <div class="col-lg-4 col-xlg-3 col-md-12" style="padding-left: 0">
                                      <div class="white-box"  style="background-color: rgb(151 151 151 / 32%);">
                                          <div class="user-bg"> 

                                              <div class="overlay-box" >
                                                  <div class="user-content">
                                                      <a href="javascript:void(0)">
                                                          @if(!empty($userinfo['avatar']))
                                                          <img class="thumb-lg img-circle" src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$userinfo['avatar']}}" alt="">
                                                          @else
                                                          <img class="thumb-lg img-circle" src="./public/backend/images/faces-clipart/pic-1.png" alt="">
                                                          @endif
                                                      </a>
                                                      <h4 class="text-white mt-2">{{$userinfo['userNV']}}</h4>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Column -->
                                  <!-- Column -->
                                  <div class="col-lg-8 col-xlg-9 col-md-12"> 
                                      <div class="card" style="background-color: rgb(151 151 151 / 32%);" >
                                          <div class="card-body">
                                              <form class="form-horizontal form-material" method="post" action="{{_WEB_ROOT.'/persinfo/update/'.Session::data('user-id')}}" enctype="multipart/form-data">
                                                  <div class="form-group mb-4">
                                                      <label style="color : white" class="col-md-12 p-0">Tên nhân viên</label>
                                                      <div class="col-md-12 border-bottom p-0">
                                                          <input style="background-color: rgb(151 151 151 / 32%); color : white;" type="text" name="name_nv" id="name_nv" class="form-control p-0 border-0" value="{{$userinfo['tenNV']}}">
                                                      </div>
                                                  </div>
                                                  <div class="form-group mb-4">
                                                      <label style="color : white" for="address_nv" class="col-md-12 p-0">Địa chỉ</label>
                                                      <div class="col-md-12 border-bottom p-0">
                                                          <input style="background-color: rgb(151 151 151 / 32%);  color : white;" type="text" class="form-control p-0 border-0" name="address_nv" id="address_nv" value="{{$userinfo['diaChi']}}">
                                                      </div>
                                                  </div>
                                                  <div class="form-group mb-4"> 
                                                      <label style="color : white"class="col-md-12 p-0">Số điện thoại</label>
                                                      <div class="col-md-12 border-bottom p-0">
                                                          <input style="background-color: rgb(151 151 151 / 32%);  color : white;" type="number" name="sdt_nv" id="sdt_nv" class="form-control p-0 border-0" value="{{$userinfo['soDT']}}">
                                                      </div>
                                                  </div>
                                                  <div class="form-group mb-4">
                                                      <label  style="color : white" class="col-md-12 p-0">Giới tính</label>
                                                      <div class="col-md-12 border-bottom p-0">
                                                          <select style="background-color: rgb(151 151 151 / 32%);  color : white; height: 42px; width: 100%;" class="form-select shadow-none p-0 border-0 form-control-line" name="sex_nv" id="sex_nv">
                                                              @php
                                                              $user_sex = $userinfo['gioiTinh'];
                                                              @endphp
                                                              @if($user_sex == 1)
                                                              <option  selected value="1">Nam</option>
                                                              <option  value="0">Nữ</option>
                                                              @else
                                                              <option  value="1">Nam</option>
                                                              <option  selected value="0">Nữ</option>
                                                              @endif
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group mb-4">
                                                      <label style="color : white" class="col-md-12 p-0">Ngày sinh</label>
                                                      <div class="col-md-12 border-bottom p-0">
                                                          @php
                                                          $str_date = $userinfo['ngaySinh'];
                                                          $date = strtotime($str_date);
                                                          $your_date = date('Y-m-d',$date);
                                                          @endphp
                                                          <input style="background-color: rgb(151 151 151 / 32%);  color : white;" type="date" name="birth_nv" id="birth_nv" class="form-control p-0 border-0" value={{$your_date}}>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label style="color : white" for="avartar_nv">Ảnh nhân viên</label>
                                                      <input style="background-color: rgb(151 151 151 / 32%);  color : white;" type="file" name="avartar_nv" class="form-control" id="avartar_nv" placeholder="Hình ảnh">
                                                      <span class="form-message">{!form_error('avatar')!}</span>
                                                  </div>

                                                  <div class="form-group mb-4">
                                                      <div class="col-sm-12">
                                                          <button tipe="submit" class="btn " style="background-color: rgb(151 151 151); color : white;">Cập nhật thông tin</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- Column -->
                              </div>
                              <!-- Row -->
                              <!-- ============================================================== -->
                              <!-- End PAge Content -->
                              <!-- ============================================================== -->
                              <!-- ============================================================== -->
                              <!-- Right sidebar -->
                              <!-- ============================================================== -->
                              <!-- .right-sidebar -->
                              <!-- ============================================================== -->
                              <!-- End Right sidebar -->
                              <!-- ============================================================== -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      
      <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>