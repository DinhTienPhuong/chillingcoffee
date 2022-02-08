  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Nhân Viên</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách Nhân Viên</li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Danh sách Nhân Viên</h4>
              @php
              $msg = Session::flash('msg');
              @endphp
              @if (!empty($msg))
              <div class="alert alert-success" role="alert">
                {{ $msg }}
              </div>
              @endif
              </p>
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Ảnh </th>
                    <th> Tên Nhân Viên </th>
                    <th> Địa Chỉ </th>
                    <th> Số Điện Thoại </th>
                    <th> Giới Tính</th>
                    <th> Trạng Thái </th>
                    <th> Actions </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  @foreach($list_categories as $key => $value)
                  <!-- {{Session::data('user-name')}}  -->
                  <tr class="">
                    <td class="py-1"> {{ $i++ }} </td>
                    @if(!empty($value['avatar']))
                      <td class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['avatar']}}"  alt="image"></td>
                      @else
                      <td class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                      @endif                  
                    <td class="py-1">{{$value['tenNV']}} </td>
                    <td class="py-1">{{$value['diaChi']}} </td>
                    <td class="py-1">{{$value['soDT']}} </td>
                    @php
                    $user_sex = $value['gioiTinh'] ;
                    @endphp
                    @if($user_sex == 1)
                    <td class="py-1" selected value="1"> Nam </td>
                    @else
                    <td class="py-1" selected value="0" >Nữ </td>
                    @endif

                    <td class="py-1">
                      <input type="checkbox" class="stockStatus" id="status{{ $value['maNV']}}" name="status" value="{{ $value['maNV']}}" {{ $value['trangThai'] ==1 ? "checked" : ""}}>
                    </td>
                    <td class="py-1">
                      <a href="{{ _WEB_ROOT.'/staff-manage-destroy/destroyid-'.$value['maNV'] }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                        <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="footer-inner-wraper">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->

  <script type="text/javascript">
    $(document).ready(function() {
      $('.stockStatus').change(function() {
        var id = $(this).val();

        var status = $(this).prop('checked');

        if (status) {
          var status_value = 1;
        } else {
          var status_value = 0;
        }

        $.ajax({
          url: '{{_WEB_ROOT."/staff-manage-status"}}',
          method: 'POST',
          data: {
            id: id,
            status: status_value
          },
          success: function(data) {

          }
        });
      })
    })
  </script>