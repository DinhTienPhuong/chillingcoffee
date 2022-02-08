<style>
    .form-control{
        width: 600px;
    }
</style>
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_2.jpg'}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Thanh toán</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Thanh toán</span></p>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 ftco-animate" style="margin-right: 2%;">
                
                <form action="{{_WEB_ROOT}}/bill-manage-save" method="POST" class="form-group mt-5 pt-3">
                    <h3 class="mb-4 billing-heading">Chi tiết hóa đơn</h3>
                    <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bill_name">Người nhận</label>
                                <input type="text"name="bill_name" id="bill_name" readonly value="{{Session::data('cus-name')}}" class="form-control" required placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bill_sdt">Số điện thoại</label>
                                <input type="tel" name="bill_sdt" id="bill_sdt" readonly value="{{Session::data('cus-sdt')}}" class="form-control" required placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bill_address">Địa chỉ</label>
                                <input type="text" name="bill_address" id="bill_address" readonly value="{{Session::data('cus-address')}}" class="form-control" required placeholder="">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bill_store">Cửa Hàng Muốn đặt</label>
                                <select name="bill_store" id="bill_store" class="form-control">
                                    @foreach($list_store as $key => $value)
                                        <option value="{{ $value['maCN']}}">{{ $value['tenCN']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bill_status">Phương Thức Thanh Toán</label>
                                <select name="bill_status" id="bill_status" class="form-control">
                                    @foreach($list_payment as $key => $value)
                                        <option value="{{ $value['maPT']}}">{{ $value['tenPT']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <p><button type="submit"class="btn btn-primary py-3 px-4">Đặt hàng</button></p>
                </form><!-- END -->
            </div>
            <div class="col-xl-4 ftco-animate">
                <div style="width:605px ;" class="mt-5 pt-3">
                    <div class="col-md-6 d-flex">
                        <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Tính Tiền</h3>
                            <h5 class="billing">Món đã gọi</h5>
                            @php
                                $i = 1;
                                if(isset($cart_prod)){
                                    foreach ($cart_prod as $key => $value) {
                            @endphp
                                <tr class="product_cart_item" id = "prod_{{ $value['maTU'] }}">  
                                    <td class="product-name">
                                        <div style="display:flex">
                                            <p style="color:#ffc107;">{{$value['tenTU']}}</p>
                                            <p style="text-align: right;">{{ currency_format($value['donGia']) }}</p>
                                            <p style="text-align: right;">{{$value['soLuong']}}</p>
                                            <p style="text-align: right;">{{ currency_format($value['tongTien']) }}</p>
                                        </div>
                                    </td>
                                    <div class="dropdown-divider"></div>
                                </tr>
						    @php 
									}
								}
							@endphp
                            <p class="d-flex">
                                <span>Phí Vận Chuyển</span>
                                <span style="text-align: right;">{{currency_format(10000)}}</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Thành tiền</span>
                                <span name="grand_total" style="text-align: right;">{{currency_format($grand_total)}}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>