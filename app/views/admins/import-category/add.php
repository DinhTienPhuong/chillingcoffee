<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Phiếu Nhập</h3>

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
                        <h4 class="card-title">Tạo Phiếu Nhập</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT}}/importcategory/save" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="import_name">Chi Nhánh</label>
                                <select name="import_name" id="import_name" class="form-control">
                                    @foreach($list_store as $key => $value)
                                        <option value="{{ $value['maCN']}}">{{ $value['tenCN']}}</option>
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="import_staff">Nhân Viên</label>
                                <select name="import_staff" id="import_staff" class="form-control">
                                    @foreach($list_staff as $key => $value)
                                        <option value="{{ $value['maNV']}}">{{ $value['tenNV']}}</option>
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="import_supplier">Nhà Cung Cấp</label>
                                <select name="import_supplier" id="import_supplier" class="form-control">
                                    @foreach($list_categories as $key => $value)
                                        <option value="{{ $value['maNCC']}}">{{ $value['tenNCC']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Tạo Phiếu Nhập</button>
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