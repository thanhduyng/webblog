<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
</head>

<body>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $err)
        {{$err}}<br>
        @endforeach
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{Session('error')}}
    </div>
    @endif

    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Đăng nhập</h1>
            </div>
            <form action="/thanhnguyenduyy/dang-nhap" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="login-form">
                    <div class="control-group">
                        <input type="email" class="login-field" id="txtEmail" name="txtEmail" placeholder="Nhập email">
                    </div>

                    <div class="control-group">
                        <input type="password" class="login-field" id="txtPassword" name="txtPassword" placeholder="Nhập mật khẩu">
                    </div>

                    <div class="row">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                    </div>
                    <div class="row">
                       
                        <div class="col-sm-6">
                            <!-- <input class="form-check-input" style="margin-left: -8em;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->
                        </div>
                        <div class="col-sm-6" style="margin-left: -5em;">
                            <!-- <p> Lưu đăng nhập</p> -->
                        </div>
                    </div>
                    @if (Route::has('password.request'))
                    <!-- <a class="login-link" href="{{ route('password.request') }}">Quên mật khẩu?</a> -->
                    @endif
                </div>
            </form>
        </div>
    </div>
</body>

<style>
    * {
        box-sizing: border-box;
    }

    *:focus {
        outline: none;
    }

    body {
        font-family: Arial;
        background-color: #3498DB;
        padding: 50px;
    }

    .login {
        margin: 20px auto;
        width: 300px;
    }

    .login-screen {
        background-color: #FFF;
        padding: 20px;
        border-radius: 5px
    }

    .app-title {
        text-align: center;
        color: #777;
    }

    .login-form {
        text-align: center;
    }

    .control-group {
        margin-bottom: 10px;
    }

    input {
        text-align: center;
        background-color: #ECF0F1;
        border: 2px solid transparent;
        border-radius: 3px;
        font-size: 16px;
        font-weight: 200;
        padding: 10px 0;
        width: 250px;
        transition: border .5s;
    }

    input:focus {
        border: 2px solid #3498DB;
        box-shadow: none;
    }

    .btn {
        border: 2px solid transparent;
        background: #3498DB;
        color: #ffffff;
        font-size: 16px;
        line-height: 25px;
        padding: 10px 0;
        text-decoration: none;
        text-shadow: none;
        border-radius: 3px;
        box-shadow: none;
        transition: 0.25s;
        display: block;
        width: 250px;
        margin: 0 auto;
    }

    .btn:hover {
        background-color: #2980B9;
    }

    .login-link {
        font-size: 12px;
        color: #444;
        display: block;
        margin-top: 12px;
    }
</style>