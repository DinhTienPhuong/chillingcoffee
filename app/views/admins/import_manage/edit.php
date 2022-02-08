<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Chi Tiết Phiếu Nhập</h3>
        </div>
        <div class="row">
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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Sửa Chi Tiết Phiếu Nhập</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/import-manage-update/id-'.$import_by_id['id']}}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="import-manage_ingredient">Nguyên Liệu</label>
                                <p style="color:black;">{{$import_by_id['tenNL']}}</p>
                            </div>
                            <div class="form-group">
                                <label for="import_amount">Số Lượng</label>
                                <input name="import_amount" type="number" class="form-control" id="import_amount"min="1" max="500" value="{{$import_by_id['amount']}}"  required>
                                <span class="form-message"> {!form_error('import_amount')!}</span>
                            </div>   
                            <div class="form-group">
                                <label for="import_price">Giá Nhập</label>
                                <input name="import_price" type="number" class="form-control" id="import_price" min="1" value="{{$import_by_id['giaNhap']}}"  required>
                                <span class="form-message"> {!form_error('import_price')!}</span>
                            </div>  
                            <button type="submit" class="btn btn-primary mr-2">Sửa Phiếu Nhập Chi Tiết</button>
                        </form>

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