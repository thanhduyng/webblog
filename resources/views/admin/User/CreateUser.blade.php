@extends('admin.index')
@section('title', 'Người quản trị')
@section('body')
<div class="page-header">
    <h1>
        Người quản trị
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Thêm/Cập nhập người quản trị
        </small>
    </h1>
</div>

<div class="row">
    <div class="col-xs-12">
        <form class="form-horizontal" id="formDetail" role="form" action="{{route('InsertUser')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="txt_name" placeholder="name" name="id" value="{{$data->id}}" class="col-xs-10 col-sm-5" />
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Tên User</label>
                <div class="col-sm-9">
                    <input type="text" id="txt_name" placeholder="nhập tên" name="name" value="{{$data->name}}" class="col-xs-10 col-sm-5" />
                    @error('name') <div class="col-xs-12 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Email</label>
                <div class="col-sm-9">
                    <input type="email" id="txt_name" placeholder="nhập email" name="email" value="{{$data->email}}" class="col-xs-10 col-sm-5" />
                    @error('email') <div class="col-xs-12 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Mật khẩu</label>
                <div class="col-sm-9">
                    <input type="password" id="txt_name" placeholder="nhập mật khẩu" name="password" value="{{$data->password}}" class="col-xs-10 col-sm-5" />
                    @error('password') <div class="col-xs-12 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>

            @if(isset($data->password))
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <span class="dashicons dashicons-nametag"></span> Xác nhận mật khẩu</label>
                <div class="col-sm-9">
                    <input type="password" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Nhập lại mật khẩu" require="" class="col-xs-10 col-sm-5" />
                    @error('txtConfirmPassword') <div class="col-xs-12 col-sm-12 alert-danger">{{ $message }}</div> @enderror
                </div>
            </div>
            @endif

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Trạng thái </label>
                <div class="col-sm-9">
                    <div class="radio">
                        <label>
                            <input type="radio" name="leve" id="leve1" value="1" @if ($data->leve == 1)
                            {{ 'checked' }}
                            @endif>Admin
                        </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="leve" id="leve2" value="0" @if ($data->status == 0)
                            {{ 'checked' }}
                            @endif> Thường
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="form-field-tags"></label>
                <div class="col-sm-9">
                    <button class="btn btn-info BTN_Save" id="BTN_Save" type="submit">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Save
                    </button>
                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                    </button>
                </div>
            </div>

        </form>
        <h3 class="text-success" id="result"></h3>
    </div>
</div>
@stop