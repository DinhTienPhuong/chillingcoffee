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
            <h4 class="card-title">Thêm bài viết</h4>
            <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/postmanage/update/'.$post_edit_id['maBai']}}" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputName1">Tên nhân viên</label>
                <select name="name_staff_post" id="name_staff_post" class="form-control">
                  @foreach($list_manage as $key => $value)
                  <option value="{{ $value['maNV']}}">{{ $value['tenNV']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Danh mục</label>
                <select name="cate_post" id="cate_post" class="form-control">
                  @foreach($list_cate_post as $key => $value)
                  <option value="{{ $value['maDanhmuc']}}">{{ $value['tenDanhmuc']}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="title_post">Tiêu đề</label>
                <input type="text" style="display:none" name="img_id" value="{{  $post_edit_id['maHA'] }}">
                <input name="title_post" type="text" class="form-control" id="title_post" value="{{$post_edit_id['tieuDe']}}" placeholder="Tiêu đề bài viết">
                <span class="form-message">
                  {!form_error('title_post')!}
                </span>
              </div>
              <div class="form-group">
                <label for="introduce_post">Giới thiệu</label>
                <textarea class="form-control" name="introduce_post" id="introduce_post" rows="4" placeholder="Giới thiệu">{{$post_edit_id['gioiThieu']}}</textarea>
                <span class="form-message">
                {!form_error('introduce_post')!}
              </span>
              </div>

              <div class="form-group">
                <label for="thumbnail_post">Hình Ảnh</label>
                <input type="file" name="thumbnail_post" class="form-control" id="thumbnail_post">
              </div>

              <div class="form-group">
                <label for="content_post">Nội dung</label>
                <textarea class="form-control" name="content_post" id="content_post" rows="40">{{$post_edit_id['noiDung']}}</textarea>
                <span class="form-message">
                {!form_error('content_post')!}
              </span>
              </div>

              <button type="submit" class="btn btn-primary mr-2">Sửa bài viết</button>

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
<script scr="<?php echo _WEB_ROOT; ?>public/backend/ckeditor5/ckeditor.js"></script>
<script>
ClassicEditor
    .create( document.querySelector( '#content_post' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );    
</script>