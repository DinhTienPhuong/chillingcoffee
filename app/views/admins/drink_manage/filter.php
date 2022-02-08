<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Thức uống </h3>
        <nav aria-label="breadcrumb">
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Danh sách đồ uống</h4>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th> Tên loại </th>
                      <th> Tên đồ uống </th>
                      <th> Ảnh </th>
                      <th> Giá </th>
                      <th> Đơn Vị </th>
                      <th> Trạng Thái </th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($list_products as $key => $value)
                    <tr class="">
                      <td class="py-1">{{ $i++ }}</td>
                      <td class="py-1">{{ $value['tenLoai']}}</td>
                      <td class="py-1">{{ $value['tenTU'] }}</td>
                      @if(!empty($value['fileAnh']))
                      <td class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}}" alt=""></td>
                      @else
                      <td class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                      @endif
                      <td class="py-1"> {{ $value['donGia'] }}.000 VND </td>
                      <td class="py-1"> {{ $value['donVi'] }}</td>
                      <td class="py-1">
                        <input type="checkbox" class="stockStatus" id="status{{ $value['maTU']}}" name="status" value="{{ $value['maTU']}}" {{ $value['trangThai'] == 1 ? "checked" : ""}}>
                      </td>
                      <td class="py-1">
                        <a href="{{ _WEB_ROOT.'/drink-manage-destroy/destroyid-'.$value['maTU'] }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                          <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                        </a>
                        <a href="{{ _WEB_ROOT.'/drink-manage-edit/editid-'.$value['maTU'] }}">
                          <button typye="submit" class="btn btn-primary" data-toggle="modal">Sửa</button>
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
    </div>
    <div class="pages">
      <div class="template-demo" style="width: fit-content;margin: 0 auto;">
        <div class="btn-group" role="group" aria-label="Basic example">
          @if($current_page > 1)
            <li> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/tim-kiem-san-pham-trang-'.($current_page - 1 )}}"> < </a> </li>
          @endif

          @for($i = 1 ; $i <= $pageTotal ; $i++)
          <li class="{{ ($current_page == $i) ? 'active' : ''}}">
            <a  class="btn btn-primary" href="{{_WEB_ROOT.'/tim-kiem-san-pham-trang-'.$i}}"> {{$i}} </a> 
          </li>
          @endfor

          @if($current_page < $pageTotal)
          <li> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/tim-kiem-san-pham-trang-'.($current_page + 1 )}}"> > </a> </li>
          @endif
        </div>
      </div>
    </div>
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