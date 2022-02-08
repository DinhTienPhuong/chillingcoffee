<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_3.jpg'}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Thực đơn của chúng tôi</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{_WEB_ROOT}}/home">Trang chủ</a></span> <span>Thực đơn</span></p>
        </div>

        </div>
    </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row" style="margin: 7% auto;">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Trà Trái Cây</h3>
        		
                @foreach($list_fruit_categories as $key => $value)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $value['tenTU'] }}</span></h3>
                                <span class="price">{{ currency_format($value['donGia']) }}</span>
                            </div>
                            <div class="d-block">
                                <p><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" style="text-decoration: underline;" class="">Xem Ngay</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
        	</div>

            <div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Trà Sữa</h3>
        		@foreach($list_milk_categories as $key => $value)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $value['tenTU'] }}</span></h3>
                                <span class="price">{{ currency_format($value['donGia']) }}</span>
                            </div>
                            <div class="d-block">
                                <p><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" style="text-decoration: underline;" class="">Xem Ngay</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
        	</div>
            
            <div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Sinh Tố</h3>
        		@foreach($list_smoothie_categories as $key => $value)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $value['tenTU'] }}</span></h3>
                                <span class="price">{{ currency_format($value['donGia']) }}</span>
                            </div>
                            <div class="d-block">
                                <p><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" style="text-decoration: underline;" class="">Xem Ngay</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Yakult</h3>
        		@foreach($list_yakult_categories as $key => $value)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $value['tenTU'] }}</span></h3>
                                <span class="price">{{ currency_format($value['donGia']) }}</span>
                            </div>
                            <div class="d-block">
                                <p><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" style="text-decoration: underline;" class="">Xem Ngay</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
        	</div>

            <div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Café Phin</h3>
        		@foreach($list_phin_categories as $key => $value)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $value['tenTU'] }}</span></h3>
                                <span class="price">{{ currency_format($value['donGia']) }}</span>
                            </div>
                            <div class="d-block">
                                <p><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" style="text-decoration: underline;" class="">Xem Ngay</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
        	</div>
            
            <div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Café Máy</h3>
        		@foreach($list_mocha_categories as $key => $value)
                    <div class="pricing-entry d-flex ftco-animate">
                        <div class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
                        <div class="desc pl-3">
                            <div class="d-flex text align-items-center">
                                <h3><span>{{ $value['tenTU'] }}</span></h3>
                                <span class="price">{{ currency_format($value['donGia']) }}</span>
                            </div>
                            <div class="d-block">
                                <p><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" style="text-decoration: underline;" class="">Xem Ngay</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
        	</div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Món Mới</span><br>
                <p style="text-align: center;">Gần đây, Bổn Tiệm vẫn còn nhiều món ngon khác để quý khách tha hồ lựa chọn</p>
            </div>
        </div>
        <div class="row" style="margin-bottom: 5%;">
            @foreach($new_product as $key => $value)
                <div class="col-md-3">
                    <div class="menu-entry">
                        <a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
                        <div class="text pt-4">
                            <h3 style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
                            <p style="width:100%; height:85px; overflow:hidden;">{{ $value['moTa'] }}</p>
                            <div style="display: grid;grid-template-columns: 85% 5% 10%;margin: 4% auto;"><span>{{ currency_format($value['donGia']) }}</span><span class="icon icon-shopping_cart"></span><span>{{ $value['luotMua'] }}</span></div>
                            <p style="text-align:center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p> 
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>