@extends('admin.index')
@section('title', 'Người quản trị')
@section('body')
<div class="page-header">
    <h1>
        Người quản trị
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Danh sách người quản trị
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
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Vai trò</th>
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

                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>
                                @if($value->leve == 1)
                                Admin
                                @else
                                Thường
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info">
                                        <a class="ace-icon fa fa-pencil bigger-120" href="{{route('CreateUser')}}?id={{$value->id}}" style="color:white"></a>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <a class="ace-icon fa fa-trash-o bigger-120" href="user-detail/delete-user/{{$value->id}}" onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white"></a>
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