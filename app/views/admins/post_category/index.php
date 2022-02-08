<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Danh mục bài viết </h3>
            <button class="btn btn-success add-cate-toggle">Thêm danh mục</button>
        </div>
        <div class="row">

            <div class="col-md-12 col-lg-12 grid-margin stretch-card">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align:center" scope="col">ID</th>
                            <th style="text-align:center" scope="col">Tên danh mục</th>
                            <th style="text-align:center" scope="col">Trạng Thái</th>
                            <th style="text-align:center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($list_categories as $key => $value)
                        <tr>
                            <th style="text-align:center" scope="row">{{ $i++ }}</th>
                            <td style="text-align:center">{{ $value['tenDanhmuc'] }}</td>
                            <td style="text-align:center">
                                <input type="checkbox" class="stockStatus" id="status{{ $value['maDanhmuc']}}" name="status" value="{{ $value['maDanhmuc']}}" {{ $value['trangThai'] ==1 ? "checked" : ""}}>
                            </td>
                            <td style="text-align:center">
                                <a href="{{ _WEB_ROOT.'/post-category-destroy/destroyid-'.$value['maDanhmuc'] }}">
                                    <button typye="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteCateModal">Xóa</button>
                                </a>
                                <button typye="submit" class="btn btn-primary" data-id-cate="{{ $value['maDanhmuc']}}" data-toggle="modal" data-target="#editCateModal-{{ $value['maDanhmuc']}}">Sửa</button>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row add-cate-form" style="display: none;">
            
            <div class="col-md-12 col-lg-12 grid-margin stretch-card">

                <form method="POST" action="{{_WEB_ROOT}}/postcategory/save">
                    <table class="table table-bordered">
                        <tbody>
            
                            <tr>
                                <th scope="row">Tên danh mục:</th>
                                
                                <td>
                                    <input name="CatePostName" type="text" class="form-control">
                                    <span class="form-message">
                                        {!form_error('CatePostName')!}
                                    </span>
                                </td>

                                <td>
                                    <button type="submit" class="btn btn-info">Thêm</button>
                                </td>
                            </tr>


                        </tbody>

                    </table>

                </form>
            </div>
        </div>
        @php
        $i = 1;
        @endphp
        @foreach($list_categories as $key => $cate_by_id)
        <div class="modal fade" id="editCateModal-{{ $cate_by_id['maDanhmuc']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">

                <div class="modal-content">
                    <form method="POST" action="{{_WEB_ROOT.'/postcategory/update/'.$cate_by_id['maDanhmuc']}}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                            <table class="table table-bordered">

                                <tbody>
                                    <tr>
                                        <th name="CatePostName" scope="row">Tên danh mục:</th>
                                        <td>
                                            <input name="editCatePostName" id="CatePostName" type="text" class="form-control" value="{{ $cate_by_id['tenDanhmuc'] }}">
                                            <span class="form-message">
                                                {!form_error('CatePostName')!}
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
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
                url: '{{_WEB_ROOT."/post-category-status"}}',
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