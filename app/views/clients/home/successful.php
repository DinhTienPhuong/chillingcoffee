<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_3.jpg'}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

        <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Chi Tiết Thức Uống</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{_WEB_ROOT}}/home">Trang chủ</a></span> <span>Thực đơn</span></p>
        </div>

        </div>
    </div>
    </div>
</section>
<section class="ftco-section">
	<div class="container" style="margin: 10% auto;">
		<h3 style="color:#ffc107;text-align: center;">Cám ơn bạn đã hàng đặt tại cửa hàng của chúng tôi</h3>
        <p style="text-align: center;">Dự Kiến Sẽ Giao Trong 30 phút nữa</p>
	</div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section ftco-animate text-center">
		<span class="subheading">Những sản phẩm tương tư</span>
		<h2 class="mb-4"></h2>
		<p style="text-align:center; width: 650px;">Bên cạnh đó Bổn Tiệm vẫn còn nhiều món ngon chờ bạn đặt ngay và thưởng thức</p>
		</div>
	</div>
	<div class="row" style="margin: 3% auto;">
		@foreach($new_product as $key => $value)
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
					<div class="text text-center pt-4">
						<h3><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
						<p style="width:100%; height:110px; overflow:hidden;">{{ $value['moTa'] }}</p>
						<div style="display: grid;grid-template-columns: 85% 5% 10%;margin: 4% auto;">
							<span style="text-align: left;">{{ currency_format($value['donGia']) }}</span>
							<span class="icon icon-shopping_cart"></span><span>{{ $value['luotMua'] }}</span>
						</div>
						<p style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p> 
					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>