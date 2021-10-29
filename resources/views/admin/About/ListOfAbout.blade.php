@extends('admin.index')
@section('title', 'Danh sách About')
@section('body')
<div class="page-header">
    <h1>
         Giới thiệu
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
       Danh sách giới thiệu
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
                            <th style="width: 10%;">Ảnh</th>
                            <th style="width: 10%;">Tiêu đề</th>
                            <th>Nội dung</th>
                            <th>Link facebook</th>
                            <th>Link instagram</th>
                            <th style="width: 10%;">Chức năng</th>
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
                                <img style="width: 80px; height: 80px;" src="{{asset("upload/abouts/".$value->image)}}"></img>
                            </td>
                            <td>{{$value->title}}</td>
                            <td>{!!$value->description!!}</td>
                            <td>{{$value->facebook_link}}</td>
                            <td>{{$value->instagram_link}}</td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-xs btn-info">
                                        <a class="ace-icon fa fa-pencil bigger-120" href="{{route('CreateAbout')}}?id={{$value->id}}" style="color:white"></a>
                                    </button>

                                    <button class="btn btn-xs btn-danger">
                                        <a class="ace-icon fa fa-trash-o bigger-120" href="about-detail/delete-about/{{$value->id}}" onclick="return confirm('Bạn có chắc muốn xóa không?')" style="color:white"></a>
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