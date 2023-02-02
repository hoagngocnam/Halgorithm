@extends('admin::layouts.index')

@section('main-content')
    <div id="login-page">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6" style="margin: auto;float: none">
                <div class="panel panel-default">
                    <div class="panel-heading">Quản trị viên</div>
                    <div class="panel-body">
                        @if ($checkLogin !== null)
                            <p class="txt-login-failed">Đăng nhập thất bại !</p>
                        @endif
                        <form role="form" action="{{ route('admin.authenticate.login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tài khoản</label>
                                <input type="text" class="form-control" name="mail_adr"
                                    value="{{ old('mail_adr') ?? $mailAdr }}" placeholder="Nhập địa chỉ mail ...">
                                @error('mail_adr')
                                    <p class="msg-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu ...">
                                @error('password')
                                    <p class="msg-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                {{-- {!! captcha_img() !!} --}}
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="captcha" value="{{ old('captcha') }}"
                                    placeholder="Nhập captcha ...">
                                @error('captcha')
                                    <p class="msg-error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember_me" value=""> Ghi nhớ đăng nhập
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Hoàn thành</button>
                        </form>
                    </div>
                    <div class="panel-footer">Hoàng Ngọc Nam</div>
                </div>
            </div>
        </div>
    </div>
@endsection
