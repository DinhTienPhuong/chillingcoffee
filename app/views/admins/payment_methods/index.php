<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Phương Thức Thanh Toán</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách Phương Thức Thanh Toán</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Phương Thức Thanh Toán
                        <a href="{{_WEB_ROOT}}/payment-methods-add">
                        <button class="btn btn-success add-cate-toggle">Thêm phương thức thanh toán</button>
                        </a>
                    </h4>
                        <table class="table table-bordered text-center">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Hình ảnh</th>
                                    <th> Tên phương thức</th>
                                    <th> Mô tả </th>
                                    <th> Trạng Thái </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach($list_payment as $key => $value)
                                <tr class="">
                                    <td  class="py-1"> {{ $i++ }} </td>
                                    @if(!empty($value['hinhDD']))
                                    <td class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/payment_methods/'.$value['hinhDD']}}" alt=""></td>
                                    @else
                                    <td class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                                    @endif
                                    <td  class="py-1"> {{ $value['tenPT'] }} </td>
                                    <td  class="py-1"> {{ $value['moTa'] }} </td>
                                    <td  class="py-1">
                                        <input type="checkbox" class="stockStatus" id="status{{ $value['maPT']}}" name="status" value="{{ $value['maPT']}}" {{ $value['trangThai'] ==1 ? "checked" : ""}}>
                                    </td>
                                    <td  class="py-1">
                                        <a href="{{ _WEB_ROOT.'/payment-methods-destroy/destroyid-'.$value['maPT'] }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                                            <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                                        </a>
                                        <a href="{{ _WEB_ROOT.'/payment-methods-edit/editid-'.$value['maPT'] }}">
                                            <button typye="submit" class="btn btn-primary" data-toggle="modal">Sửa</button>
                                        </a>
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
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.stockStatus').change(function() {
            var id = $(this).val();

            var status = $(this).prop('checked');

            if (status) {
                var status_value = 1;
            } else {
                var status_value = 0;
            }

            $.ajax({
            url: '{{_WEB_ROOT."/payment-methods-status"}}',
            method: 'POST',
            data: {
                id: id,
                status: status_value
            },
            success: function(data) {

            }
        });
        })
    })
</script>