<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Cập Nhật Hóa Đơn</h3>

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
                        <h4 class="card-title">Cập Nhật Hóa Đơn</h4>
                        <form style="" class="forms-sample" method="POST" action="{{_WEB_ROOT.'/bill-manage-update/id-'.$Bill_by_id['maHD']}}" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="bill_status">Người Nhận</label>
                                <p style="color:#000;">{{ $Bill_by_id['nguoiNhan'] }}</p>
                            </div>
                            <div class="form-group">
                                <label for="bill_status">Số Điện Thoại</label>
                                <p style="color:#000;">{{ $Bill_by_id['numberPhone'] }}</p>
                            </div>
                            <div class="form-group">
                                <label for="bill_status">Địa Chỉ</label>
                                <p style="color:#000;">{{ $Bill_by_id['address'] }}</p>
                            </div>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th> # </th>
                                        <th> Thức Uống </th>
                                        <th> Số Lượng </th>
                                        <th> Giá Tiền </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($list_categories as $key => $value)
                                        <tr class="">
                                            <td class="py-1"> {{ $i++ }} </td>
                                            <td class="py-1"> {{ $value['tenTU'] }} </td>
                                            <td class="py-1"> {{ $value['soLuong'] }} </td>
                                            <td class="py-1"> {{ currency_format($value['giaTien']) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <br>
                            <label for="bill_status">Trạng Thái Đơn Hàng</label>
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                    @foreach($list_bill_status as $key => $value)
                                        <th> {{ $value['tenTT']}} </th>
                                    @endforeach
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($list_bill_status as $key => $value)
                                        <td class="py-1 py-3"> {{ date("d/m/Y H:i:s", strtotime( $value['Create_at'])) }} </td>
                                    @endforeach
                                </tbody>
                            </table>
                            <input name="bill_status" type="text" class="form-control" id="bill_status" value="{!old('bill_status')!}">
                            <button type="submit" class="btn btn-primary mr-2">Cập Nhật Hóa Đơn</button>
                            <button class="btn btn-light">Thoát</button>
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