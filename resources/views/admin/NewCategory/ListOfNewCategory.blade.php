@extends('admin.index')
@section('title', 'Danh mục')
@section('body')
<div class="page-header">
    <h1>
        Danh mục
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Danh sách danh mục
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
                            <th>Ảnh</th>
                            <th>Tên danh mục</th>
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

                            <td>
                                <img style="width: 80px; height: 80px;" src="{{asset("upload/newCategory/".$value->image)}}"></img>
                            </td>
                            <td>{{$value->name}}</td>
                            <td>
                                @if($value->status == 1)
                                Hoạt động
                                @else
                                Không hoạt động
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info">
                                        <a class="ace-icon fa fa-pencil bigger-120" href="{{route('CreateNewCategory')}}?id={{$value->id}}" style="color:white"></a>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <a class="ace-icon fa fa-trash-o bigger-120" href="newcategory-detail/delete-newcategory/{{$value->id}}" onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white"></a>
                                        
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