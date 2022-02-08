
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CHILLING COFFEE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

  </head>
  <body>
  
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="{{_WEB_ROOT}}/home">chilling<small>coffee</small></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>
				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto" style="height: 70px;">
						<li class="nav-item active"><a href="{{_WEB_ROOT}}/trang-chu" class="nav-link">Trang chủ</a></li>
						<li class="nav-item"><a href="{{_WEB_ROOT}}/thuc-don" class="nav-link">Thực đơn</a></li>
						<li class="nav-item"><a href="{{_WEB_ROOT}}/bai-viet" class="nav-link">Bài viết</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Giới Thiệu</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a href="{{_WEB_ROOT}}/ve-chung-toi" class="nav-link" style="color:white !important;">Về chúng tôi</a>
								<a href="{{_WEB_ROOT}}/lien-he" class="nav-link" style="color:white !important;">Liên hệ</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" style="display: flex;" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								@php
								$check = Session::data('cus-name')
								@endphp
								@if(!empty($check))	
								{{Session::data('cus-user')}}
								@else
								<p>Đăng nhập</p>
								@endif
							</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<a href="{{_WEB_ROOT}}/cap-nhat-thong-tin/id-{{Session::data('cus-id')}}" class="nav-link" style="color:white !important;">Sửa đổi thông tin</a>
								<a href="{{_WEB_ROOT}}/dang-ky" class="nav-link" style="color:white !important;">Đăng ký</a>
								<a href="{{_WEB_ROOT}}/dang-nhap" class="nav-link" style="color:white !important;">Đăng nhập</a>
								<a href="{{_WEB_ROOT}}/dang-xuat" class="nav-link" style="color:white !important;">Đăng xuất</a>
								<a href="{{_WEB_ROOT}}/gio-hang" class="nav-link" style="color:white !important;"><span class="icon icon-shopping_cart"></span> Giỏ hàng</a>
								<!-- <a href="{{_WEB_ROOT}}/dang-xuat" class="nav-link" style="color:white !important;">Đơn Hàng Của bạn</a> -->
							</div>
						</li>
						<li class="nav-item">  
							<div style="padding: unset;" class="sidebar-box">
								<form  action="{{_WEB_ROOT.'/tim-kiem'}}" method="POST" class="search-form">
									<div class="form-group" style="padding-left:20px;padding-top: 10px;">
										<div class="icon">
										<button class="btn btn-primary" type="submit" class="btn btn-primary" style="border-radius:5px;">Tìm Kiếm</button>
									</div>
									<input type="text"  name="drinkName" class="form-control" placeholder="Tìm Kiếm..." style="width: 200px;">
									</div>
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
    <!-- END nav -->
</html>