<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_3.jpg'}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Bài viết</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Bài viết</span></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row" style="margin: 6% 0 10%;">
            <div class="col-md-8 ftco-animate">
            <h6 style="padding-bottom: 15px;" class="ftco-heading-6"><a href="{{_WEB_ROOT}}/home/menu" >Bài viết</a> > {{ $post_client['tenDanhmuc'] }}</h6>
                <h2 class="mb-3">{{ $post_client['tieuDe'] }}</h2>
                <p>{{ $post_client['gioiThieu'] }}</p>
                <p>
                <img style="padding: 15px 0;"src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$post_client['thumbnail']}}" alt="" class="img-fluid">
                </p>
                <p>{{ $post_client['noiDung'] }}</p>
                <div class="meta">
                    <p style="text-align:right; color:white;">{{ $post_client['tenNV'] }}</p>     
                </div>
            </div>
            <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box ftco-animate" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img20.jpg'}});padding-top: 200px;background-size:cover;"></div>
                <div class="sidebar-box ftco-animate" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img21.jpg'}});padding-top: 200px;background-size:cover;"></div>
                <div class="sidebar-box ftco-animate" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img22.jpg'}});padding-top: 200px;background-size:cover;"></div>
                <div class="sidebar-box ftco-animate" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/img33.jpg'}});padding-top: 200px;background-size:cover;"></div>
                <div class="sidebar-box ftco-animate">
                    <h3>Lời ngỏ</h3>
                    <p>Tiệm chúng mình sẽ mở cửa khi tình hình ổn định hơn. 
                        Tất cả các hình thức bán đều sẽ tạm thời không hoạt động. 
                        Cùng chờ đợi thông báo mới nhất từ Chilling Coffee bạn nhé 
                        Cùng Chilling Coffee chung tay phòng chống dịch
                    </p>
                </div>
            </div>
        </div> 
    </div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section ftco-animate text-center">
		<span class="subheading">Những thông tin khác</span>
		<h2 class="mb-4"></h2>
        <p style="text-align: center;width: 640px;">Thường Xuyên cập nhật để Khách Hàng có những trải nghiệm tốt nhất tại Bổn Tiệm</p>
		</div>
	</div>
	<div class="row">
        @foreach($list_post as $key => $value)
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="{{ _WEB_ROOT.'/post-manage-detail/id-'.$value['maBai'] }}" class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['thumbnail']}});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="{{ _WEB_ROOT.'/post-manage-detail/id-'.$value['maBai'] }}">{{ $value['tieuDe'] }}</a></h3>
                        <p style="width:100%; height:110px; overflow:hidden;">{{ $value['gioiThieu'] }}</p>
                    </div>
                </div>
            </div>       
        @endforeach
	</div>
</section>