    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Chi Nhánh</a></li>

                        <li class="breadcrumb-item active" aria-current="page">Danh sách Chi Nhánh</li>

                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Danh sách Chi Nhánh
                            <a  href="{{_WEB_ROOT}}/store-add">
                            <button class="btn btn-success add-cate-toggle">Thêm Chi Nhánh</button>
                            </a>
                            </h4> 
                            <div class="table-responsive">

                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> Hình ảnh </th>
                                            <th> Tên Chi Nhánh </th>
                                            <th> Địa Chỉ</th>
                                            <th> Số Điện Thoại</th>
                                            <th> Trạng Thái</th>
                                            <!-- <th> Ngày</th> -->
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach($list_categories as $key => $value)
                                        <tr class="">
                                            <td class="py-1"> {{ $i++ }} </td>
                                            @if(!empty($value['hinhAnh']))
                                            <td class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/store/'.$value['hinhAnh']}}" alt=""></td>
                                            @else
                                            <td class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                                            @endif
                                            <td class="py-1"> {{ $value['tenCN'] }} </td>
                                            <td class="py-1"> {{ $value['diaChi'] }} </td>
                                            <td class="py-1"> {{ $value['soDT'] }} </td>
                                            <!-- <td class="py-1">{! date("d/m/Y", strtotime( $value['Create_at'])) !}</td> -->
                                            </td>
                                            <td class="py-1">
                                                <input type="checkbox" class="stockStatus" id="status{{ $value['maCN']}}" name="status" value="{{ $value['maCN']}}" {{ $value['trangThai'] ==1 ? "checked" : ""}}>
                                            </td>
                                            <td class="py-1">
                                                <a href="{{ _WEB_ROOT.'/store-destroy/destroyid-'.$value['maCN'] }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                                                    <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                                                </a>
                                                <a href="{{ _WEB_ROOT.'/store-edit/editid-'.$value['maCN'] }}">
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
          url: '{{_WEB_ROOT."/store-status"}}',
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