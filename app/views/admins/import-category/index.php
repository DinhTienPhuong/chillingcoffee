<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{_WEB_ROOT}}/import-category">Phiếu Nhập</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách phiếu nhập</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách phiếu nhập</h4>
                    
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Chi nhánh</th>
                                    <th> Nhân viên nhập</th>
                                    <th> Nhà cung cấp</th>
                                    <th> Ngày lập</th>
                                    
                                    <th> </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($list_categories as $key => $value)
                                <tr class="">
                                    <td class="py-1"> {{ $i++ }} </td>
                                    <td class="py-1"> {{ $value['tenCN'] }} </td>
                                    <td class="py-1"> {{ $value['tenNV'] }} </td>
                                    <td class="py-1"> {{ $value['tenNCC'] }} </td>
                                    <td class="py-1">{! date("d/m/Y", strtotime( $value['Create_at'])) !}</td>
                                    <td class="py-1">
                                        <a href="{{ _WEB_ROOT.'/import-category-destroy/destroyid-'.$value['maPN'] }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                                            <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                                        </a>
                                        <a href="{{ _WEB_ROOT.'/import-manage/id-'.$value['maPN'] }}"><button typye="submit" class="btn btn-success" data-toggle="modal">Chi Tiết</button></a>
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