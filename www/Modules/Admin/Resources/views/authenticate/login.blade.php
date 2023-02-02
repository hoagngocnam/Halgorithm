@extends('admin::layouts.index')

@section('main-content')
    <div class="pcoded-content m-t-100">
        <div class="row">
            <div class="col-md-6 col-lg-5 mg-auto">
                <div class="card box-shadow">
                    <div class="card-header">
                        <h5 class="f-17">Đăng nhập - [Quản trị viên]</h5>
                        <hr>
                    </div>
                    <div class="card-body">
                        <form class="validate-form" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="row-input-group col-12 form-group">
                                    <label class="text-label">Địa chỉ Mail</label>
                                    <input type="text" class="form-control" name="mail_adr" value="{{ old('mail_adr') }}"
                                        placeholder="Nhập địa chỉ mail . . ." />
                                    @error('mail_adr')
                                        <p class="error-msg">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="row-input-group col-12 form-group">
                                    <label class="text-label">Mật khẩu</label>
                                    <input type="text" class="form-control" name="password" value="{{ old('password') }}"
                                        placeholder="Nhập mật khẩu . . ." />
                                    @error('password')
                                        <p class="error-msg">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="row-input-group col-12 form-group">
                                    {!! captcha_img() !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="row-input-group col-12 form-group">
                                    <label class="text-label">Captcha</label>
                                    <input type="text" class="form-control" name="captcha" value="{{ old('captcha') }}"
                                        placeholder="Nhập captcha ...">
                                    @error('captcha')
                                        <p class="error-msg">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="m-t-20">
                                <div class="checkbox checkbox-primary d-inline">
                                    <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                    <label for="checkbox-fill-2" class="cr remember_me">Remember me !</label>
                                </div>
                                <button type="submit" class="btn btn-success font-weight-bold fa-pull-right">
                                    <i class="feather icon-check mr-2"></i>Hoàn thành
                                </button>
                            </div>
                        </form>
                        <a href="">Đăng ký tài khoản</a>
                        <a href="">Quên mật khẩu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
