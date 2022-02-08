  <!-- partial -->
  <div class="main-panel">
      <div class="content-wrapper">
          <div class="page-header">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Loại đồ uống</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Chỉnh sửa đồ uống</li>
                  </ol>
              </nav>
          </div>
          <div class="row">

              <div class="col-12 grid-margin stretch-card">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Thêm loại đồ uống</h4>
                          @php
                            $errors = Session::flash('errors');
                          @endphp
                          @if (!empty($errors))
                            <div class="alert alert-danger" role="alert">
                              {{ $errors }}
                            </div>
                          @endif
                          <form class="forms-sample" method="POST" action="{{_WEB_ROOT.'/drinkcategory-update/'.$cate_by_id['maLoai']}}">
                              <div class="form-group">
                                  <label for="cate_name">Tên loại</label>
                                  <input type="text" class="form-control" id="cate_name" name ="cate_name"
                                  value = "{{ $cate_by_id['tenLoai'] }}">
                                  <span class="form-message">
                                      {!form_error('cate_name')!}
                                  </span>
                              </div> 
                              <button class="btn btn-light">Cập nhật</button>
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
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Chillingcoffee</span>

              </div>
          </div>
      </footer>
      <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>