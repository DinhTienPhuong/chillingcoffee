<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Chi Nhánh</h3>
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
                        <h4 class="card-title">Thêm chi nhánh</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/store-update/id-'.$store_by_id['maCN']}}" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="store_name">Tên chi nhánh</label>
                                <input name="store_name" type="text" class="form-control" id="store_name"  value="{{$store_by_id['tenCN']}}">
                                <span class="form-message"> {!form_error('store_name')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh đại diện</label>
                                <input type="file" name="image" class="form-control" id="image" value="{{$store_by_id['hinhAnh']}}">
                                <span class="form-message"> {!form_error('image')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="store_address">Địa chỉ</label>
                                <input name="store_address" type="text" class="form-control" id="store_address" value="{{$store_by_id['diaChi']}}">
                                <span class="form-message"> {!form_error('store_address')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="store_phone">Số Điện Thoại</label>
                                <input name="store_phone" type="text" class="form-control" id="store_phone" value="{{$store_by_id['soDT']}}">
                                <span class="form-message"> {!form_error('store_phone')!}</span>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thêm đồ uống</button>
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