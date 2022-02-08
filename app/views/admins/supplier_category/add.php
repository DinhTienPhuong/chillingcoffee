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

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Nhà Cung Cấp</h4> 
                        @php
                            echo (!empty($msg))?$msg:false;
                            HtmlHelper::formOpen('post', _WEB_ROOT.'/suppliercategory/save');
                            HtmlHelper::input('<div>','<br/>'.form_error('supplier_name', '<span style="color:red;">', '</span>').'</div>', 'text', 'supplier_name', 'form-control', 'supplier_name', 'Tên Nhà Cung Cấp', old('supplier_name'));
                            HtmlHelper::input('<div>','<br/>'.form_error('supplier_email','<span style="color:red;">', '</span>').'</div>', 'email', 'supplier_email', 'form-control', 'supplier_email', 'Email Nhà Cung Cấp',old('supplier_email'));
                            HtmlHelper::input('<div>','<br/>'.form_error('supplier_sdt','<span style="color:red;">', '</span>').'</div>', 'number', 'supplier_sdt', 'form-control', 'supplier_sdt', 'Số Điện Thoại Nhà Cung Cấp',old('supplier_sdt'));
                            HtmlHelper::input('<div>','<br/>'.form_error('supplier_address','<span style="color:red;">', '</span>').'</div>', 'text', 'supplier_address', 'form-control', 'supplier_address', 'Địa Chỉ Nhà Cung Cấp',old('supplier_address'));
                            HtmlHelper::submit('Thêm Nhà Cung Cấp','btn btn-light');
                            HtmlHelper::formClose();
                        @endphp
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
<!-- main-panel ends -->
</div>
