<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url({{_WEB_ROOT.'/public/frontend//images/bg_3.jpg'}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread">Bài viết</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{_WEB_ROOT}}/trang-chu">Trang chủ</a></span> <span>Bài viết</span></p>
            </div>

        </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container" style="margin-top: 5%;">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Thông tin nổi bật</span>
                <br>
                <p  style="text-align: center;">Thường Xuyên cập nhật để bạn có những trải nghiệm tốt nhất tại Bổn Tiệm</p>
            </div>
        </div>
        <div class="row d-flex" style="margin-top: 3%;">
            @foreach($list_post as $key => $value)
            <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ _WEB_ROOT.'/post-manage-detail/id-'.$value['maBai'] }}" class="block-20" style="background-image: url({{ _WEB_ROOT.'/public/uploads/drink_category/'.$value['thumbnail']}});"></a>
                        <div class="text py-4 d-block">
                        <div class="meta">
                            <p style="text-align:left; color:gray;"><span class="icon-person"></span> {{ $value['views'] }} &nbsp; <span class="icon-calendar"></span> {{ date("d/m/Y", strtotime( $value['start_date'])) }}</p>
                    
                            </div>
                            <div class="margin">
                            <h3 class="heading mt-2" style=" white-space: nowrap;overflow: hidden; text-overflow: ellipsis;"> <a href="{{ _WEB_ROOT.'/post-manage-detail/id-'.$value['maBai'] }}">{{ $value['tieuDe'] }}</a></h3>
                            </div>
                            <p class="js_text"style="width:100%; height: 75px; margin-top: 21px; overflow:hidden; -webkit-line-clamp: 3;-webkit-box-orient: vertical; display: -webkit-box;">{{ $value['gioiThieu'] }}</p>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="pages" style="margin-bottom: 5%;">
    <div class="template-demo" style="width: fit-content;margin: 0 auto;">
      <div class="btn-group" role="group" aria-label="Basic example">
        @if($current_page > 1)
          <li style="list-style-type: none; padding: 0 2%;"> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/bai-viet-trang-'.($current_page - 1 )}}"> < </a> </li>
        @endif

        @for($i = 1 ; $i <= $pageTotal ; $i++)
        <li style="list-style-type: none; padding: 0 2%;" class="{{ ($current_page == $i) ? 'active' : ''}}">
          <a  class="btn btn-primary" href="{{_WEB_ROOT.'/bai-viet-trang-'.$i}}"> {{$i}} </a> 
        </li>
        @endfor

        @if($current_page < $pageTotal)
        <li style="list-style-type: none; padding: 0 2%;"> <a  class="btn btn-primary" href="{{_WEB_ROOT.'/bai-viet-trang-'.($current_page + 1 )}}"> > </a> </li>
        @endif
      </div>
    </div>
  </div>
</section>