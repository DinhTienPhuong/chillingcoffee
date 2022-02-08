<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_2.jpg'}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread">Tìm Kiếm </h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{_WEB_ROOT}}/home">Trang chủ</a></span></p>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="ftco-menu">
    <div class="container">
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Kết quả tìm kiếm</a>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                                <div class="row"  style="    margin: 50px auto; ">
                                    @if (!empty($list_product))
                                        @foreach($list_product as $key => $value)
                                            <div class="col-md-3">
                                                <div class="menu-entry">
                                                    <a href="{{ _WEB_ROOT.'/product-detail-'.$value['maTU'] }}" class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
                                                    <div class="text text-center pt-4">
                                                        <h3><a href="{{ _WEB_ROOT.'/product-detail-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
                                                        <p  style="text-align: justify;width: 100%;height: 110px;overflow: hidden;">{{ $value['moTa'] }}</p>
                                                        <p style="text-align: center;" class="price"><span>{{ currency_format($value['donGia']) }}</span></p>
                                                        <p style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="row justify-content-center mb-5" style="padding: 0px 240px;">
                                            <h3 class="col-md-7 heading-section text-center subheading" style="color:#ffc107;font-weight: 600;width: 600px;"> Không tìm thấy kết quả</h3>
                                    @endif
                                        </div>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>