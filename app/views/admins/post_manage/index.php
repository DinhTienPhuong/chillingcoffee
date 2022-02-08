<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Quản lí bài viết </h3>
      <nav aria-label="breadcrumb">

      </nav>
    </div>
    <div class="row">


      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Danh sách bài viết</h4>
            <p class="card-description"> Add class <code>.table-striped</code>
            </p>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="text-align:center"> # </th>
                    <th style="text-align:center"> Tên nhân viên </th>
                    <th style="text-align:center"> Danh mục </th>
                    <th style="text-align:center"> Tiêu đề </th>
                    <!-- <th style="text-align:center"> Giới thiệu </th> -->
                    <th style="text-align:center"> Thumbnail </th>
                    <th style="text-align:center"> Banner </th>
                    <th style="text-align:center"> Actions </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $i = 1;
                  @endphp
                  @foreach($list_post as $key => $value)
                  <tr style="    background-color: #f0f1f6;">
                    <th style="text-align:center" scope="row">{{ $i++ }}</th>
                    <td style="text-align:center" class="py-1">{{ $value['tenNV']}}</td>
                    <td style="text-align:center" class="py-1">{{ $value['tenDanhmuc']}}</td>
                    <td style="text-align:center" class="py-1">{{ $value['tieuDe']}}</td>
                    <!-- <td style="text-align:center" class="py-1">{{ $value['gioiThieu']}}</td> -->
                    @if(!empty($value['thumbnail']))
                      <td style="text-align:center" class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['thumbnail']}}" alt=""></td>
                      @else
                      <td style="text-align:center" class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                      @endif
                      <!--  -->
                      @if(!empty($value['banner']))
                      <td style="text-align:center" class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['banner']}}" alt=""></td>
                      @else
                      <td style="text-align:center" class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                      @endif

                    <td style="text-align:center" class="py-1">
                       <a href="{{ _WEB_ROOT.'/post-manage-destroy/destroyid-'.$value['maBai'] }}"  onclick="return confirm('Bạn chắc chắn muốn xóa ?')">
                          <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                        </a>
                        <a href="{{ _WEB_ROOT.'/post-manage-edit/editid-'.$value['maBai'] }}">
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
  </div>
  <div class="pages">
    <div class="template-demo" style="width: fit-content;margin: 0 auto;">
      <div class="btn-group" role="group" aria-label="Basic example">
        @if($current_page > 1)
          <li style="list-style-type: none; padding: 0 2%;"> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/post-manage-trang-'.($current_page - 1 )}}"> < </a> </li>
        @endif

        @for($i = 1 ; $i <= $pageTotal ; $i++)
        <li style="list-style-type: none; padding: 0 2%;" class="{{ ($current_page == $i) ? 'active' : ''}}">
          <a  class="btn btn-primary" href="{{_WEB_ROOT.'/post-manage-trang-'.$i}}"> {{$i}} </a> 
        </li>
        @endfor

        @if($current_page < $pageTotal)
        <li style="list-style-type: none; padding: 0 2%;"> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/post-manage-trang-'.($current_page + 1 )}}"> > </a> </li>
        @endif
      </div>
    </div>
  </div>
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