@extends('admin.index')
@section('title', 'Danh sách New')
@section('body')
<div class="page-header">
    <h1>
        List New
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Danh sách New
        </small>
    </h1>
</div>
@if (session('message'))
<div class="alert alert-success">
    {{Session('message')}}
</div>
@endif
<div class="row">
    <div class="col-xs-12">
        <div class="row">
            <div class="col-xs-12">
                <table id="simple-table" class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Tên danh mục</th>
                            <th>Ảnh</th>
                            <th>Tên bài viết</th>
                            <th>Ảnh đại diện</th>
                            <th>Nội dung</th>
                            <th>Địa chỉ</th>
                            <th>Ngày đi</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $value)
                        <tr>
                            <td class="center">
                                <label class="pos-rel">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td><?php echo \App\Models\NewCategory::find($value->id_category_new)->name ?></td>
                            <td>
                                <button class="btn btn-default" data-toggle="modal" data-target="#view-image-{{ $value->id }}">
                                    Xem ảnh
                                </button>

                                <div class="modal fade" id="view-image-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Hình ảnh có tên <b>{{ $value->name }}</b></h4>{{ $value->id }}
                                            </div>
                                            <div class="modal-body text-center">
                                                @foreach ($imageNew as $image)
                                                <img src="{{ $image->image }}" width="250px">
                                                @endforeach

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{$value->name}}</td>
                            <td>
                            <img style="width: 80px; height: 80px;" src="{{asset("upload/newbg/".$value->background_image)}}"></img>
                            </td>
                            <td>{{$value->description}}</td>
                            <td>{{$value->address}}</td>
                            <td>{{$value->go_date}}</td>
                            <td>
                                @if($value->status == 1)
                                Hoạt động
                                @else
                                Không hoạt động
                                @endif</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info">
                                        <a class="ace-icon fa fa-pencil bigger-120" href="new-detail/edit-new/{{$value->id}}" style="color:white"></a>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <a class="ace-icon fa fa-trash-o bigger-120" href="new-detail/delete-new/{{$value->id}}" onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white"></a>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop