  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Loại đồ uống</a></li>
            <li class="breadcrumb-item active" aria-current="page">Danh sách loại đồ uống</li>
          </ol>
        </nav>
        <a  href="{{_WEB_ROOT}}/drink-category-add">
        <button class="btn btn-success add-cate-toggle">Thêm loại đồ uống</button>
        </a>
      </div>
      
      <div class="row">
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Danh sách loại đồ uống</h4>
              @php
              $msg = Session::flash('msg');
              @endphp
              @if (!empty($msg))
              <div class="alert alert-success" role="alert">
                {{ $msg }}
              </div>
              @endif
              </p>
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Tên loại </th>
                    <th> Trang thái </th>
                    <th> </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  @foreach($list_categories as $key => $value)
                  <tr class="">
                    <td class="py-1"> {{ $i++ }} </td>
                    <td class="py-1"> {{ $value['tenLoai'] }} </td>
                    <span class="form-message">
                        {!form_error('tenLoai')!}
                      </span>
                    <td class="py-1">
                      <input type="checkbox" class="stockStatus" id="status{{ $value['maLoai']}}" name="status" value="{{ $value['maLoai']}}" {{ $value['trangThai'] ==1 ? "checked" : ""}}>
                    </td>
                    <td class="py-1">
                      <a href="{{ _WEB_ROOT.'/drink-category-destroy/destroyid-'.$value['maLoai'] }}" onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                        <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                      </a>
                      <a href="{{ _WEB_ROOT.'/drink-category-edit/editid-'.$value['maLoai'] }}">
                        <button typye="submit" class="btn btn-primary" data-toggle="modal">Sửa</button>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
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
  <!-- main-panel ends -->

  <script type="text/javascript">
    $(document).ready(function() {
      $('.stockStatus').change(function() {
        var id = $(this).val();

        var status = $(this).prop('checked');

        if (status) {
          var status_value = 1;
        } else {
          var status_value = 0;
        }

        $.ajax({
          url: '{{_WEB_ROOT."/drink-category-status"}}',
          method: 'POST',
          data: {
            id: id,
            status: status_value
          },
          success: function(data) {

          }
        });
      })
    })
  </script>