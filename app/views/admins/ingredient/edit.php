<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Nguyên Liệu</h3>

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
                        <h4 class="card-title">Sửa Nguyên Liệu</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/ingredient-update/id-'.$ingredient_by_id['maNL']}}" enctype="multipart/form-data">
                           
                            <div class="form-group">
                                <label for="ingredient_amount">Số Lượng</label>
                                <input name="ingredient_amount" type="number" class="form-control" id="ingredient_amount" value="{{$ingredient_by_id['soLuong']}}">
                                <span class="form-message"> {!form_error('ingredient_amount')!}</span>
                            </div>   
                            <div class="form-group">
                                <label for="ingredient_start">Ngày Sản Xuất</label>
                                <input name="ingredient_start" type="date" class="form-control" id="ingredient_start" value="{{$ingredient_by_id['ngaySX']}}">
                                <span class="form-message"> {!form_error('ingredient_start')!}</span>
                            </div>  
                            <div class="form-group">
                                <label for="ingredient_end">Ngày Hết Hạn</label>
                                <input name="ingredient_end" type="date" class="form-control" id="ingredient_end" value="{{$ingredient_by_id['ngayHH']}}">
                                <span class="form-message"> {!form_error('ingredient_end')!}</span>
                            </div>  
                            <button type="submit" class="btn btn-primary mr-2">Cập Nguyên Liệu</button>
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