@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="f-17">[{{ $category->name }}]</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="validate-form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Sản phẩm</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Giá gốc</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Giá khuyến mãi</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Bài viết</label>
                        <textarea class="form-control" placeholder="Nhập bài viết . . .">{{ old('posts') }}</textarea>
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Hình ảnh</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="picture">
                                <label class="custom-file-label">Chọn hình ảnh</label>
                            </div>
                        </div>
                        @error('picture')
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
