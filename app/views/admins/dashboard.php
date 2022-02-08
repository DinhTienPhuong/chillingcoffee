<div class="main-panel card-body">
  <div class="row">
        <div class="col-sm-4 grid-margin stretch-card">
          <div class="card card-danger-gradient">
            <div class="card-body mb-4">
              <h4 class="card-title text-white">Tình Trạng Hóa Đơn</h4>
 
            </div>
            <div class="card-body bg-white pt-4">
              <div class="row pt-4">
                <div class="col-sm-6">
                  <div class="text-center border-right border-md-0">
                    <h4>Đã xử lý</h4>
                    <h1 class="text-dark font-weight-bold mb-md-3">{{$data['list_bill_delivered']}}</h1>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="text-center">
                    <h4>Chờ xử lý</h4>
                    <h1 class="text-dark font-weight-bold">{{$data['list_bill']}}</h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-8  grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-xl-flex mb-2">
                <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend">
                  <table class="table table-striped">
                  <h4 class="card-title">Sản Phẩm Bán Chạy</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Tên đồ uống </th>
                          <th> Đã bán </th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($list_product as $key => $value)
                        
                        <tr class="">
                          <td class="py-1">{{ $i++ }}</td>
                          <td class="py-1">{{ $value['tenTU'] }}</td>
                          @if(!empty($value['fileAnh']))
                          <td class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['fileAnh']}}" alt=""></td>
                          @else
                          <td class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                          @endif
                          <td class="py-1"> {{ $value['luotMua'] }}</td>
                          
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend">
                <h4 class="card-title">Bài viết được xem nhiều nhất</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
              <th style="text-align:center"> # </th>
              <th style="text-align:center"> Danh mục </th>
              <th style="text-align:center"> Thumbnail </th>
              <th style="text-align:center"> Tiêu đề </th>
              <th style="text-align:center"> Lượt xem </th>
              </tr>
            </thead>
            <tbody>
              @php
              $i = 1;
              @endphp
              @foreach($list_post as $key => $value)
                <tr style="    background-color: #f0f1f6;">
                  <th style="text-align:center" scope="row">{{ $i++ }}</th>
                  <td style="text-align:center" class="py-1">{{ $value['tenDanhmuc']}}</td>
                  @if(!empty($value['thumbnail']))
                  <td style="text-align:center" class="py-1"> <img src="{{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['thumbnail']}}" alt=""></td>
                  @else
                  <td style="text-align:center" class="py-1"> <img src="./public/backend/images/faces-clipart/pic-1.png" alt=""></td>
                  @endif
                  <td style="text-align:center"class="py-1">{{ $value['tieuDe']}}</td>
                  <td style="text-align:center"class="py-1">{{ $value['views']}}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
  