<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Khách Hàng</h3>
        <nav aria-label="breadcrumb">
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Danh sách khách hàng</h4>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Khách hàng </th>
                      <th> Số điện thoại </th>
                      <th> Địa chỉ </th>
                      <th> Email </th>
                      <th> Tên đăng nhập </th> 
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($list_cus as $key => $value)
                    
                    <tr class="">
                      <td class="py-3">{{ $i++ }}</td>
                      <td class="py-3">{{ $value['nguoiNhan']}}</td>
                      <td class="py-3">{{ $value['numberPhone'] }}</td>
                      <td class="py-3"> {{ $value['address'] }}</td>
                      <td class="py-3"> {{ $value['email'] }}</td>
                      <td class="py-3"> {{ $value['userCus'] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="pages">
      <div class="template-demo" style="width: fit-content;margin: 0 auto;">
        <div class="btn-group" role="group" aria-label="Basic example">
          @if($current_page > 1)
            <li  style="list-style-type: none; padding: 0 2%;" > <a  class="btn btn-primary" href="{{_WEB_ROOT.'/khach-hang-trang-'.($current_page - 1 )}}"> < </a> </li>
          @endif

          @for($i = 1 ; $i <= $pageTotal ; $i++)
          <li  style="list-style-type: none; padding: 0 2%;"  class="{{ ($current_page == $i) ? 'active' : ''}}">
            <a  class="btn btn-primary" href="{{_WEB_ROOT.'/khach-hang-trang-'.$i}}"> {{$i}} </a> 
          </li>
          @endfor

          @if($current_page < $pageTotal)
          <li  style="list-style-type: none; padding: 0 2%;" > <a  class="btn btn-primary" href="{{_WEB_ROOT.'/khach-hang-trang-'.($current_page + 1 )}}"> > </a> </li>
          @endif
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
          url: '{{_WEB_ROOT."/drink-manage-status"}}',
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