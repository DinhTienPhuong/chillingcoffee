<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Phương Thức Thanh Toán</h3>
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
                        <h4 class="card-title">Cập Nhật Phương Thức Thanh Toán</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/payment-methods-update/id-'.$payment_by_id['maPT']}}" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="payment_name">Tên Phương Thức Thanh Toán</label>
                                <input name="payment_name" type="text" class="form-control" id="payment_name" value="{{$payment_by_id['tenPT']}}">
                                <span class="form-message"> {!form_error('payment_name')!}</span>
                            </div>
                            <div class="form-group"> 
                                <label for="image">Hình Đại Diện</label>   
                                <input type="file" name="image" class="form-control" id="image" value="{{$payment_by_id['hinhDD']}}">
                                <span class="form-message"> {!form_error('image')!}</span>
                            </div> 
                            <div class="form-group">
                                <label for="payment_description">Mô Tả</label>
                                <input name="payment_description" type="text" class="form-control" value="{{$payment_by_id['moTa']}}" id="payment_description">
                                <span class="form-message"> {!form_error('payment_description')!}</span>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thay đổi phương thức</button>
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