<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_1.jpg'}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <span class="subheading">Chào mừng bạn đến với</span>
            <h1 class="mb-4">Trải nghiệm nếm thử vị cà phê tuyệt nhất</h1>
            <p class="mb-4 mb-md-5">Một ly cà phê chất lượng là một ly cà phê được người barista dành cả tâm huyết của mình để làm nên</p>
            <p><a href="{{_WEB_ROOT}}/thuc-don" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng ngay</a> <a href="{{_WEB_ROOT}}/thuc-don" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem thực đơn</a></p>
        </div>

        </div>
    </div>
    </div>

    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_2.jpg'}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <span class="subheading">Chào mừng bạn đến với</span>
            <h1 class="mb-4">Hương vị mê ly &amp; Địa điểm tuyệt vời</h1>
            <p class="mb-4 mb-md-5">Chilling Coffee đem đến cho bạn một không gian hoàn hảo để thưởng thức được một ly cà phê ngon không chỉ được cảm nhận bằng vị giác</p>
            <p><a href="{{_WEB_ROOT}}/thuc-don" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng ngay</a> <a href="{{_WEB_ROOT}}/thuc-don" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem thực đơn</a></p>
        </div>

        </div>
    </div>
    </div>

    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_3.jpg'}});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <span class="subheading">Chào mừng bạn đến với</span>
            <h1 class="mb-4">Kem đã nóng và sẵn sàng để phục vụ</h1>
            <p class="mb-4 mb-md-5">Cảm nhận tinh tế một ly cà phê pha máy được chế biến hoàn hảo từ công đoạn đánh sữa đến pha cà phê</p>
            <p><a href="{{_WEB_ROOT}}/thuc-don" class="btn btn-primary p-3 px-xl-4 py-xl-3">Đặt hàng ngay</a> <a href="{{_WEB_ROOT}}/thuc-don" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Xem thực đơn</a></p>
        </div>

        </div>
    </div>
    </div>
</section>
<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Khám phá sản phẩm của chúng tôi</span>
                <br>
                <p>Các sản phẩm được chăm chút kĩ lưỡng từ công đoạn nhập và sơ chế nguyên liệu, chế biến thức uống và giao đến tay khách hàng.</p>
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Café Máy</a>

                            <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Trà Sữa</a>

                            <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Café Phin</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center" style="padding-top: 5%;">
                    
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row">
                                    <a href="{{ _WEB_ROOT.'/product-detail-'.$value['maTU'] }}">
                                        @foreach($list_1_categories as $key => $value)
                                            <div class="col-md-4">
                                                <div class="menu-wrap">
                                                    <a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="menu-img img mb-4" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
                                        
                                                        <h3 style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
                                                        <p style="text-align: justify;width:100%; height:85px; overflow:hidden;">{{ $value['moTa'] }}</p>
                                                        <div style="display: grid;grid-template-columns: 90% 5% 5%;margin: 4% auto;">
                                                            <span style="text-align: left;">{{ currency_format($value['donGia']) }}</span>
                                                            <span class="icon icon-shopping_cart"></span><span>{{ $value['luotMua'] }}</span>
                                                        </div>
                                                        <p style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p>                                           
                                               
                                                </div>
                                            </div>
                                        @endforeach
                                    </a>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                                <div class="row">
                                        @foreach($list_2_categories as $key => $value)
                                            <div class="col-md-4">
                                                <div class="menu-wrap">
                                                    <a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="menu-img img mb-4" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
                                                
                                                        <h3 style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
                                                        <p style="text-align: justify;width:100%; height:85px; overflow:hidden;">{{ $value['moTa'] }}</p>
                                                        <div style="display: grid;grid-template-columns: 90% 5% 5%;margin: 4% auto;"><span>{{ currency_format($value['donGia']) }}</span><span class="icon icon-shopping_cart"></span><span>{{ $value['luotMua'] }}</span></div>
                                                        <p style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p> 
                                              
                                                </div>
                                            </div>
                                        @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                                <div class="row">
                                    @foreach($list_3_categories as $key => $value)
                                        <div class="col-md-4">
                                            <div class="menu-wrap">
                                                <a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="menu-img img mb-4" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
                                 
                                                    <h3 style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
                                                    <p style="text-align: justify;width:100%; height:85px; overflow:hidden;">{{ $value['moTa'] }}</p>
                                                    <div style="display: grid;grid-template-columns: 90% 5% 5%;margin: 4% auto;"><span>{{ currency_format($value['donGia']) }}</span><span class="icon icon-shopping_cart"></span><span>{{ $value['luotMua'] }}</span></div>
                                                    <p style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p> 
                                         
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="https://www.facebook.com/peacecoffee.bd/" class="gallery img d-flex align-items-center" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img5.jpg'}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-facebook"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="https://www.facebook.com/peacecoffee.bd/" class="gallery img d-flex align-items-center" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img6.jpg'}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-facebook"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="https://www.facebook.com/peacecoffee.bd/" class="gallery img d-flex align-items-center" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img1.jpg'}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                    <span class="icon-facebook"></span>
                </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="https://www.facebook.com/peacecoffee.bd/" class="gallery img d-flex align-items-center" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img8.jpg'}});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-facebook"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section" style="padding:100px;"> 
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Thông tin nổi bật</span>
                <br>
                <p style="text-align: center;width: 640px;">Thường Xuyên cập nhật để Khách Hàng có những trải nghiệm tốt nhất tại Bổn Tiệm</p>
            </div>
        </div>
        <div class="row d-flex" style="padding-top: 45px;">
            @foreach($list_home_post as $key => $value)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ _WEB_ROOT.'/post-manage-detail/id-'.$value['maBai'] }}" class="block-20" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['thumbnail']}});"></a>
                        <div class="text py-4 d-block">
                        <div class="meta">
                            <p style="text-align:left; color:gray;"><span class="icon-person"></span> {{ $value['views'] }} &nbsp; <span class="icon-calendar"></span> {{ date("d/m/Y", strtotime( $value['start_date'])) }}</p>
                    
                            </div>
                            <div class="margin">
                            <h3 class="heading mt-2" style=" white-space: nowrap;overflow: hidden; text-overflow: ellipsis;"> <a href="{{ _WEB_ROOT.'/post-manage-detail/id-'.$value['maBai'] }}">{{ $value['tieuDe'] }}</a></h3>
                            </div>
                            <p class="js_text"style="width:100%; height: 75px; margin-top: 21px; overflow:hidden; -webkit-line-clamp: 3;-webkit-box-orient: vertical; display: -webkit-box;">{{ $value['gioiThieu'] }}</p>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>