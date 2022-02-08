    <!-- partial -->
    <div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Nguyên Liệu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách Nguyên Liệu</li>
            </ol>
        </nav>
        </div>
        <div class="row">
        <div class="col-lg-12 stretch-card">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách Nguyên Liệu
                    <a  href="{{_WEB_ROOT}}/ingredient-add">
                        <button class="btn btn-success add-cate-toggle">Thêm Nguyên Liệu</button>
                    </a>
                </h4>
                @php
                $msg = Session::flash('msg');
                @endphp
                @if (!empty($msg))
                <div class="alert alert-success" role="alert">
                {{ $msg }}
                </div>
                @endif
                </p>
                <table class="table table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> Tên Nguyên Liệu </th>
                        <th> Số Lượng</th>
                        <th> Đơn Vị</th>
                        <th> Ngày Sản Suất</th>
                        <th> Ngày Hết Hạn</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($list_ingredient as $key => $value)
                        <tr class="">
                            <td class="py-1"> {{ $i++ }} </td>
                            <td class="py-1"> {{ $value['tenNL'] }} </td>
                            <td class="py-1"> {{ $value['soLuong'] }} </td>
                            <td class="py-1"> {{ $value['donVi'] }} </td>
                            <td class="py-1"> {! date("d/m/Y", strtotime( $value['ngaySX'])) !} </td>
                            <td class="py-1"> {! date("d/m/Y", strtotime( $value['ngayHH'])) !} </td>
                            <td class="py-1">
                                <a href="{{ _WEB_ROOT.'/ingredient-destroy/destroyid-'.$value['maNL'] }}"  onclick="return confirm('Bạn chắc chắn muốn xóa ?')"><button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button></a>
                                <a href="{{ _WEB_ROOT.'/ingredient-edit/editid-'.$value['maNL'] }}"><button typye="submit" class="btn btn-primary" data-toggle="modal">Sửa</button></a>
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