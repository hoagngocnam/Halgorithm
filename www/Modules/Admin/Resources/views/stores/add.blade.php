@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Đăng ký cửa hàng</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="validate-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Tên cửa hàng</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Chủ sở hữu</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <select class="form-control select-custom" name="account_id">
                            <option value="" selected disabled>Chọn chủ sở hữu . . .</option>
                            @foreach ($accounts as $account)
                                <option @selected($account->id == old('account_id')) value="{{ $account->id }}">{{ $account->full_name }}</option>
                            @endforeach
                        </select>
                        @error('account_id')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Màu nền</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="color" class="form-control" name="background" value="{{ old('background') }}"
                            placeholder="Nhập họ . . ." />
                        @error('background')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="m-t-50">
                    <a href="{{ route('admin.account.index') }}" class="btn btn-danger font-weight-bold">
                        <i class="feather icon-rotate-ccw mr-2"></i>Quay lại
                    </a>
                    <button type="submit" class="btn btn-success font-weight-bold fa-pull-right">
                        <i class="feather icon-check mr-2"></i>Hoàn thành
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
