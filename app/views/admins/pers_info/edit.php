<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Thức uống</h3>

        </div>
        <div class="row">
     
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm thông tin</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/persinfo/update/'.$cate_by_id['maNV']}}" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="sur_name">Họ</label>
                                <input name="sur_name" type="text" class="form-control" id="sur_name" placeholder="Họ nhân viên">

                                <!-- <span class="form-message"> {!form_error('drink_name')!}</span> -->
                            </div>
                            <div class="form-group">
                                <label for="name_nv">Tên</label>
                                <input name="name_nv" type="text" class="form-control" id="name_nv" placeholder="Tên nhân viên">

                                <!-- <span class="form-message"> {!form_error('drink_name')!}</span> -->
                            </div>
                      
                            <div class="form-group">
                            <label for="sex_nv">Giới tính</label>
                                <select class="form-control" name="sex_nv" id="sex_nv">
                                    <option value="0"> Nam </option>
                                    <option value="1"> Nữ </option>
                                    <option value="2"> Khác </option>
                                </select>
                                <!-- <span class="form-message">{!form_error('drink_amount')!}</span> -->
                            </div>
                            <div class="form-group">
                                <label for="birth_nv">Ngày sinh</label>
                                <input name="birth_nv" type="date" class="form-control" id="birth_nv" placeholder="Ngày sinh">
                                <!-- <span class="form-message">{!form_error('drink_amount')!}</span> -->
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <input type="file" name="image" class="form-control" id="image" placeholder="Hình ảnh">
                                <!-- <span class="form-message">{!form_error('image')!}</span> -->
                            </div>
                            <div class="form-group">
                                <label for="address_nv">Địa chỉ</label>
                                <input name="address_nv" type="text" class="form-control" id="address_nv" placeholder="Địa chỉ">
                                <!-- <span class="form-message">{!form_error('drink_amount')!}</span> -->
                            </div>
                            <div class="form-group">
                                <label for="sdt_nv">Số điện thoại</label>
                                <input name="sdt_nv" type="number" class="form-control" id="sdt_nv" placeholder="Số điện thoại">
                                <!-- <span class="form-message">{!form_error('drink_price')!}</span>     -->
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Thêm thông tin</button>
                                <button class="btn btn-light">Thoát</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="footer-inner-wraper">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
            </div>
        </div>
    </footer>
    <!-- partial -->
</div>