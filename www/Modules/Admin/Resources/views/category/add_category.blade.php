@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Thêm danh mục</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="validate-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Danh mục</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="mail_adr" value="{{ old('mail_adr') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('mail_adr')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="m-t-50">
                    <button type="submit" class="btn btn-success font-weight-bold">
                        <i class="feather icon-check mr-2"></i>Hoàn thành
                    </button>
                    <a href="{{ route('admin.account.list') }}" class="btn btn-danger font-weight-bold fa-pull-right">
                        <i class="feather icon-rotate-ccw mr-2"></i>Quay lại
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
