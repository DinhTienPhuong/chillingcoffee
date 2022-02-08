<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth" style="background-image:url(http://localhost/chillingcoffee/public/frontend//images/img3.jpg); background-size: 100% 100%;">

            <div style="-webkit-box-flex: 1;flex-grow: 1;display: flex;flex-wrap: wrap;margin-right: -9px;margin-left: -9px;background-color: rgba(0, 0, 0, 0.5);">
                <section class="ftco-section contact-section">
                    <div class="container mt-5" style="margin-left: 13%;">
                        <div class="row block-9">
                            <div class="col-md-4 contact-info ftco-animate">
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <h1 style="font-size:30px;color: white;" class="h4">Cập Nhật Thông Tin Khách Hàng</h1 style="font-size:30px;">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <p style="text-align:justify;color: white;">Luôn cập nhật những tin tức mới nhất về các chương trình khuyến mãi cũng như thưởng thức món mới của bổn tiệm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-6 ftco-animate">

                                <form action="{{_WEB_ROOT.'/cusinfo/update/'.Session::data('cus-id')}}" method="POST" class="contact-form" enctype="multipart/form-data" style="width: 80%;">

                                    <div class="form-group" >
                                        <input style="color:white; border: 1px solid white;" type="text" name="cus_name" id="cus_name" class="form-control" placeholder="Tên Người Dùng" value="{{$customer['nguoiNhan']}}">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_name')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <input style="color:white; border: 1px solid white;" type="tel" name="cus_sdt" id="cus_sdt" class="form-control" placeholder="Số Điện Thoại" value="{{$customer['numberPhone']}}">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_sdt')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <input style="color:white; border: 1px solid white;" type="text" name="cus_address" id="cus_address" class="form-control" placeholder="Địa Chỉ" value="{{$customer['address']}}">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_address')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <input style="color:white; border: 1px solid white;" type="mail" name="email" id="email" class="form-control" placeholder="Mail của bạn" value="{{$customer['email']}}">
                                        <span style="color:red;" class="form-message"> {!form_error('email')!}</span>
                                    </div>

                                    <div class="form-group">
                                        <input style="color:white; border: 1px solid white;" type="text" name="cus_user" id="cus_user" class="form-control" placeholder="Tên Đăng Nhập" value="{{$customer['userCus']}}">
                                        <span style="color:red;" class="form-message"> {!form_error('cus_user')!}</span>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button tipe="submit" class="btn " style="background-color: rgb(151 151 151); color : white;">Cập nhật thông tin</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2" style="padding-left: 207px;">
                        <a href="{{_WEB_ROOT}}/trang-chu">
                            <button style="font-size: inherit;" class="btn btn-block btn- auth-form-btn">
                                <i style="font-size: inherit;" class="mdi mdi-home"></i> Quay về trang chủ </button>
                        </a>
                    </div>
                </section>
            </div>
        </div>



        <!-- content-wrapper ends -->
    </div>

    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->