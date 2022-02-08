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
	<div class="container">
		<h6 class="ftco-heading-6"><a href="{{_WEB_ROOT}}/home/menu" >{{ $drink_detail['tenLoai'] }}</a> > {{ $drink_detail['tenTU'] }}</h6>
		<br>
		<div class="row">
			<div class="col-lg-6 mb-5 ftco-animate">
				<a href="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$drink_detail['fileAnh']}}" class="image-popup"><img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$drink_detail['fileAnh']}}" class="img-fluid" alt="Colorlib Template"></a>
			</div>
			<form class="col-lg-6 product-details pl-md-5 ftco-animate" method="post" onsubmit="return false">
				<h3>{{ $drink_detail['tenTU'] }}</h3>
				<p class="price"><span>{{ currency_format($drink_detail['donGia']) }}</span></p>
				<p>{{ $drink_detail['moTa'] }}</p>
				<div class="row mt-4">
					<div class="col-md-6">
					<div class="form-group d-flex">
					</div>
					</div>
					<div class="w-100"></div>
					<div class="input-group col-md-6 d-flex mb-3">
						<span class="input-group-btn mr-2">
							<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
							<i class="icon-minus"></i>
							</button>
						</span>
						<input type="number" id="quantity" name="qty" value="1" min="1" max="100" class = "form-control input-number cart_product_qty_{{ $drink_detail['maTU'] }}">
						<span class="input-group-btn ml-2">
							<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
								<i class="icon-plus"></i>
							</button>
						</span>
						<input type="hidden" value="{{ $drink_detail['maTU'] }}" name = "prodid_hidden" class = "cart_product_id_{{ $drink_detail['maTU'] }}" />
						<input type="hidden" value="{{ $drink_detail['tenTU'] }}" name = "prodname_hidden"class = "cart_product_name_{{ $drink_detail['maTU'] }}" />
						<input type="hidden" value="{{ $drink_detail['fileAnh'] }}" name = "prodimage_hidden" class = "cart_product_image_{{ $drink_detail['maTU'] }}"/>
						<input type="hidden" value="{{ $drink_detail['donGia'] }}" name = "prodprice_hidden" class = "cart_product_price_{{ $drink_detail['maTU'] }}"/>
					</div>
				</div>
				<p>
					<button type="submit" class="btn btn-primary py-3 px-5 add-to-cart" style="color: #000!important;" data-id_product = "{{ $drink_detail['maTU'] }}">Thêm vào giỏ hàng</button>
				</p>
			</form>
		</div>
	</div>
</section>
<section class="ftco-section">
	<div class="container" style="margin: 7% auto;">
		<div class="row justify-content-center mb-5 pb-3">
		<div class="col-md-7 heading-section ftco-animate text-center">
		<span class="subheading">Những sản phẩm tương tư</span>
		<h2 class="mb-4"></h2>
		<p style="text-align:center;">Bên cạnh đó Bổn Tiệm vẫn còn nhiều món ngon chờ bạn đặt ngay và thưởng thức</p>
		</div>
	</div>
	<div class="row">
		@foreach($list_product as $key => $value)
			<div class="col-md-3">
				<div class="menu-entry">
					<a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="img" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></a>
					<div class="text pt-4">
						<h3 style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}">{{ $value['tenTU'] }}</a></h3>
						<p style="width:100%; height:85px; overflow:hidden;">{{ $value['moTa'] }}</p>
						<div style="display: grid;grid-template-columns: 85% 5% 10%;margin: 4% auto;"><span>{{ currency_format($value['donGia']) }}</span><span class="icon icon-shopping_cart"></span><span>{{ $value['luotMua'] }}</span></div>
						<p style="text-align: center;"><a href="{{ _WEB_ROOT.'/product-detail/id-'.$value['maTU'] }}" class="btn btn-primary btn-outline-primary">Xem Chi Tiết</a></p> 
					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>