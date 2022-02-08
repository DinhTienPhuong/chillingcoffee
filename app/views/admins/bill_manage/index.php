<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{_WEB_ROOT}}/bill-manage">Hóa Đơn</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách Hóa Đơn</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Hóa Đơn</h4>
                        <div class="table-responsive">

                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Mã Khách Hàng</th>
                                    <th> SDT</th>
                                    <th> Địa Chỉ</th>
                                    <th> PT Thanh Toán</th>
                                    <th> Tổng Bill</th>
                                    
                                    <th> Ngày Tạo</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($list_bill as $key => $value)
                                    <tr class="">
                                        <td class="py-1"> {{ $i++ }} </td>
                                        <td class="py-1"> {{ $value['nguoiNhan'] }} </td>
                                        <td class="py-1"> {{ $value['numberPhone'] }} </td>
                                        <td class="py-1"> {{ $value['address'] }} </td>
                                        <td class="py-1"> {{ $value['tenPT'] }} </td>
                                        <td class="py-1"> {{ currency_format($value['tongTien']) }} </td>
                                      
                                        <td class="py-1">{! date("d/m/Y", strtotime( $value['Create_at'])) !}</td>
                                        <td class="py-1">
                                            <a href="{{ _WEB_ROOT.'/bill-manage-destroy/destroyid-'.$value['maHD'] }}">
                                            <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">Xóa</button></a>
                                            <a href="{{ _WEB_ROOT.'/bill-manage-edit/editid-'.$value['maHD'] }}"><button typye="submit" class="btn btn-primary" data-toggle="modal">Sửa</button></a>
                                            <a href="{{ _WEB_ROOT.'/bill-detail/'.$value['maHD'] }}"><button typye="submit" class="btn btn-success" data-toggle="modal">Chi Tiết</button></a>
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
            <li> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/bill-manage-trang-'.($current_page - 1 )}}"> < </a> </li>
          @endif

          @for($i = 1 ; $i <= $pageTotal ; $i++)
          <li class="{{ ($current_page == $i) ? 'active' : ''}}">
            <a  class="btn btn-primary" href="{{_WEB_ROOT.'/bill-manage-trang-'.$i}}"> {{$i}} </a> 
          </li>
          @endfor

          @if($current_page < $pageTotal)
          <li> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/bill-manage-trang-'.($current_page + 1 )}}"> > </a> </li>
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