<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a style="font-size: 16px;color: white;text-transform: uppercase;" class="navbar-brand brand-logo" href="{{_WEB_ROOT}}/trang-quan-tri">Chilling Coffee</a>
                <a class="navbar-brand brand-logo-mini" style="font-size: 14px;color:white;"href="{{_WEB_ROOT}}/trang-quan-tri">Coffee</a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>
                <div class="search-field d-none d-xl-block">
                    <form class="d-flex align-items-center h-100" action="{{_WEB_ROOT.'/drink-manage-filter'}}" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend bg-transparent">
                                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                            </div>
                            <input type="text" name="drinkName" placeholder="Tìm Kiếm Sản Phẩm" class="form-control bg-transparent border-0">
                            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                        </div>
                    </form>
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <div class="nav-profile-img">
                                <img src="{{_WEB_ROOT.'/public/backend//images/faces/Khuong.jpg'}}" alt="image">
                            </div>
                            <div class="nav-profile-text">
                                <p class="mb-1 text-black">
                                @php
								$check = Session::data('user-name')
								@endphp
								@if(!empty($check))	
								{{Session::data('user-name')}}
								@else
								<p>Đăng nhập</p>
								@endif    
                                </p>
                            </div>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                            <div class="p-3 text-center bg-primary">
                                <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{_WEB_ROOT.'/public/backend//images/faces/Khuong.jpg'}}" alt="image">
                            </div>
                            <div class="p-2">
                                <h5 class="dropdown-header text-uppercase pl-2 text-dark"></h5>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{_WEB_ROOT}}/pers-info">
                                    <span>Thông tin cá nhân</span>
                                    <span class="p-0">
                                        <i class="mdi mdi-account-card-details"></i>
                                    </span>
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Hoạt động</h5>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{_WEB_ROOT}}/login">
                                    <span>Đăng nhập</span>
                                    <i class="mdi mdi-login"></i>
                                </a>
                                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="{{_WEB_ROOT}}/admin-logout">
                                    <span>Đăng xuất</span>
                                    <i class="mdi mdi-logout ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-category">Chính</li>
                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{_WEB_ROOT}}/trang-quan-tri">
                            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                            <span class="menu-title">Bảng điều khiển</span>
                        </a>
                    </li>
                    <!-- End Dashboard -->
                     <!-- Loại đồ uống  -->
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="customer">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Khách hàng</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="customer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/khach-hang">Danh sách khách hàng</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- End Loại đồ uống  -->
                    <!-- Loại đồ uống  -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#drink" aria-expanded="false" aria-controls="drink">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Thức uống</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="drink">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/drink-category">Danh sách loại thức uống</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/drink-manage-add">Thêm đồ uống</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/drink-manage">Danh sách thức uống</a></li>
                            </ul>
                        </div>
                    </li>

                    <!-- End Loại đồ uống  -->

                    <!-- Quản lì bài viết -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#posts" aria-expanded="false" aria-controls="posts">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Quản lí bài viết</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="posts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"  href="{{_WEB_ROOT}}/post-manage-add">Thêm bài viết</a></li>
                                <li class="nav-item"> <a class="nav-link"  href="{{_WEB_ROOT}}/post-manage">Danh sách bài viết</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/post-category">Quản lí danh mục</a></li>
                            </ul>
                        </div>
                    </li>
                    <!-- End quản lí bài viét -->


                    <!-- Quản lì hóa đơn -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#bill" aria-expanded="false" aria-controls="bill">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Quản lí hóa đơn</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="bill">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/bill-manage">Danh sách hóa đơn</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/payment-methods">Phương thức thanh toán</a></li> 
                            </ul>
                        </div>
                    </li>
                    <!-- End quản lí hóa đơn -->

                    <!-- Quản lì nhập hàng -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Importgoods" aria-expanded="false" aria-controls="Importgoods">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Nhập kho</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="Importgoods">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="{{_WEB_ROOT}}/import-category">Quản lí phiếu nhập</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{_WEB_ROOT}}/import-category-add">Thêm phiếu nhập</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/ingredient">Nguyên liệu</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/supplier-category">Nhà cung cấp</a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <!-- Quản lì Chi nhánh -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#store" aria-expanded="false" aria-controls="store">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Chi Nhánh</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="store">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/store-add">Thêm chi nhánh</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/store">Danh sách chi nhánh</a></li> 
                            </ul>
                        </div>
                    </li>
                    <!-- End quản lí Chi nhánh -->

                    <!-- Quản lí Phản Hồi -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#customer" aria-expanded="false" aria-controls="customer">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Khách Hàng</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="customer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/customer-manage">Danh Sách Khách Hàng</a></li> 
                            </ul>
                        </div>
                    </li> -->
                    <!-- End quản lí Phản Hồi -->

                    <!-- Quản lì nhân Viên -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#Satff" aria-expanded="false"
                            aria-controls="Satff">
                            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                            <span class="menu-title">Nhân Viên</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="Satff">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/staffmanage-add">Thêm Nhân Viên Mới</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{_WEB_ROOT}}/staffmanage">Danh Sách Nhân Viên</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>