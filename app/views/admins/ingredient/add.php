<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Nguyên Liệu</h3>

        </div>

        <div class="row">
            @php
            $errors = Session::flash('errors');
            @endphp
            @if (!empty($errors))
            <div class="alert alert-danger" role="alert">
                {{ $errors }}
            </div>
            @endif
            @php
            $msg = Session::flash('msg');
            @endphp
            @if (!empty($msg))
            <div class="alert alert-success" role="alert">
                {{ $msg }}
            </div>
            @endif
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Nguyên Liệu</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT}}/ingredient-save" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ingredient_name">Tên Nguyên Liệu</label>
                                <input name="ingredient_name" type="text" class="form-control" id="ingredient_name" value="{!old('ingredient_name')!}" placeholder="Tên nguyên liệu">
                                <span class="form-message"> {!form_error('ingredient_name')!}</span>
                            </div>

                            <div class="form-group">
                                <label for="ingredient_description">Mô Tả</label>
                                <textarea rows="3" name="ingredient_description" class="form-control" id="ingredient_description" placeholder="Mô tả">{!old('ingredient_description')!}</textarea>
                                <span class="form-message">{!form_error('ingredient_description')!}</span>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thêm Nguyên Liệu</button>
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