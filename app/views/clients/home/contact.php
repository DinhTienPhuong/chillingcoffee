<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_2.jpg'}});" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Liên hệ với chúng tôi</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{_WEB_ROOT}}/trang-chu">Trang chủ</a></span> <span>Liên hệ</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <section class="ftco-section contact-section">
      <div class="container mt-5">
        <div class="row block-9">
					<div class="col-md-4 contact-info ftco-animate">
						<div class="row">
							<div class="col-md-12 mb-4">
	              <h2 class="h4">Thông tin liên hệ</h2>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Địa chỉ:</span> 198 Đông Bắc, Tân Chánh Hiệp, Quận 12, TPHCM</p>
	            </div>
	            <div class="col-md-12 mb-3">
	              <p><span>Số điện thoại:</span>+ 1235 2355 98</p>
	            </div>
						</div>
					</div>
					<div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate">
            <form action="{{_WEB_ROOT}}/feedback-save" method="POST" class="contact-form">
              <div class="form-group">
                <input type="text" name="feedback_name" id="feedback_name" value="{{Session::data('cus-name')}}" class="form-control" placeholder="Người Gởi">
                 <span style="color:red;" class="form-message"> {!form_error('feedback_name')!}</span>
              </div>
              <div class="form-group">
                <input type="text" name="feedback_email" id="feedback_email" value="{{Session::data('cus-email')}}" class="form-control" placeholder="Email">
                 <span style="color:red;" class="form-message"> {!form_error('feedback_email')!}</span>
              </div>
              <div class="form-group">
                <input type="text" name="feedback_title" id="feedback_title" value="{!old('feedback_title')!}" class="form-control" placeholder="Tiêu đề">
                 <span style="color:red;" class="form-message"> {!form_error('feedback_title')!}</span>
              </div>
              <div class="form-group">
                <textarea name="feedback_content" id="feedback_content" cols="30" rows="7" class="form-control" placeholder="Phản hồi">{!old('feedback_content')!}</textarea>
                <span style="color:red;" class="form-message"> {!form_error('feedback_content')!}</span>
              </div>
              <div class="form-group">
                <input type="submit" value="Gửi" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>