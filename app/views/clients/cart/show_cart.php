<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_2.jpg'}});" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Giỏ hàng</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giỏ hàng</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Sản phẩm</th>
						        <th>Giá</th>
						        <th>Số lượng</th>
						        <th>Thành tiền</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@php
									  $i = 1;
										if(isset($cart_prod)){
											foreach ($cart_prod as $key => $value) {
						    	@endphp
								<tr class=" product_cart_item" id = "prod_{{ $value['maTU'] }}">
									<td class="product-remove">
										<a class = "cart_quantity_delete" href="#" onclick="return confirm('Bạn chắc chắn muốn xóa?')" data-delid = "{{ $value['maTU'] }}">
											<span class="icon-close"></span>
										</a>
									</td>
									
									<td class="image-prod">
										<div class="img" style="background-image:url({{_WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}});"></div>
									</td>
									
									<td class="product-name">
										<h3>{{$value['tenTU']}}</h3>
									</td>
									
									<td class="price">
										<span class="cart_price_mini">{{ $value['donGia'] }}</span>
									</td>
									
									<td class="quantity">
										<div class="input-group mb-3">
										<input type="number" name="quantity" class="cart_quantity_input form-control input-number" value="{{$value['soLuong']}}" min="1" max="100" data-id_prod = "{{$value['maTU']}}">
									</div>
								</td>
									
									<td class="total">
										<span class="cart_total_price">{{$value['tongTien']}}</span>
									</td>
								</tr>

						      	@php 
										}
									}
								@endphp
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3 total_area">
    					<h3>Tạm Tính</h3>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Thành tiền</span>
    						<span class="grandtotal">{{currency_format($grand_total)}}</span>
    					</p>
    				</div>
    				<p class="text-center"><a href="{{_WEB_ROOT}}/xac-nhan-don-hang" class="btn btn-primary py-3 px-4">Chuyển đến trang thanh toán</a></p>
    			</div>
    		</div>
			</div>
		</section>
