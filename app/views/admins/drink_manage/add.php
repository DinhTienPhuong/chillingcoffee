<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Thức uống</h3>

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
                        <h4 class="card-title">Thêm đồ uống</h4>
                        <form class="forms-sample" method="POST" action="{{_WEB_ROOT}}/drinkmanage/save" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputName1">Loại đồ uống</label>
                                <select name="drink_cate_name" id="inputState" class="form-control">
                                    @foreach($list_categories as $key => $value)
                                        <option value="{{ $value['maLoai']}}">{{ $value['tenLoai']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="drink_name">Tên đồ uống</label>
                                <input name="drink_name" type="text" class="form-control" id="drink_name" value="{!old('drink_name')!}" placeholder="Tên đồ uống">
                            
                                <span class="form-message"> {!form_error('drink_name')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh minh họa</label>
                                <input type="file" name="image" class="form-control" id="image"  value="{!old('image')!}" placeholder="Hình ảnh">
                                <span class="form-message">{!form_error('image')!}</span>
                            </div>
                            <div class="form-group">
                                <label for="drink_price">Giá</label>
                                <input name="drink_price" type="number" class="form-control" id="drink_price"  value="{!old('drink_price')!}" placeholder="Giá">
                                <span class="form-message">{!form_error('drink_price')!}</span>    
                            </div>    
                            <div class="form-group">
                                <label for="drink_description">Mô Tả</label>
                                <textarea rows="3"name="drink_description" class="form-control" id="drink_description">{!old('drink_description')!}</textarea> 
                                <span class="form-message">{!form_error('drink_description')!}</span>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Thêm đồ uống</button>
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