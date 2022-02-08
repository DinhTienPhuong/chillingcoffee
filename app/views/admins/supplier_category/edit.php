<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Nhà Cung Cấp</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thêm Nhà Cung Cấp</li>
                </ol>
            </nav>
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
                        <h4 class="card-title">Sửa Nhà Cung Cấp</h4>
                        <form class="forms-sample" method="POST"action="{{_WEB_ROOT.'/suppliercategory/update/'.$supplier_by_id['maNCC']}}"> 
                            <div class="form-group">
                                <label for="supplier_name">Tên Nhà Cung Cấp</label>
                                <input type="text" class="form-control" id="supplier_name" name="supplier_name" value="{{$supplier_by_id['tenNCC']}}">
                                <span class="form-message"> {!form_error('supplier_name')!}</span>
                            </div> 
                            <div class="form-group">
                                <label for="supplier_email">Email</label>
                                <input type="mail" class="form-control" id="supplier_email" name="supplier_email" value="{{$supplier_by_id['email']}}">
                                <span class="form-message"> {!form_error('supplier_email')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="supplier_sdt">Số Điện Thoại</label>
                                <input type="number" class="form-control" id="supplier_sdt" name="supplier_sdt" value="{{$supplier_by_id['soDT']}}">
                                <span class="form-message"> {!form_error('supplier_sdt')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="supplier_address">Địa Chỉ</label>
                                <textarea type="text" row="3" class="form-control" id="supplier_address" name="supplier_address">{{$supplier_by_id['diaChi']}}</textarea>
                                <span class="form-message"> {!form_error('supplier_address')!}</span>
                            </div>
                            <button type="submit" class="btn btn-light">Sửa Nhà Cung Cấp</button>
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
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Chillingcoffee</span>

            </div>
        </div>
    </footer>
    <!-- partial -->
</div>
