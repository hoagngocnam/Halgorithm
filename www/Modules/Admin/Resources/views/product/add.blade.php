@extends('admin::layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="f-17">Thêm sản phẩm</h5>
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
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Danh mục</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <select class="form-control" name="category_id">
                            <option value="" selected disabled>Chọn danh mục . . .</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Giá gốc</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="original_price" value="{{ old('original_price') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('original_price')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Giá khuyến mãi</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <input type="text" class="form-control" name="promotional_price" value="{{ old('promotional_price') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('promotional_price')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="row-input-group col-6 form-group">
                        <label class="text-label">Hình ảnh</label>
                        <i class="feather icon-star-on icon-required"></i>
                        <div class="input-group">
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
                    <a href="{{ route('admin.product.index') }}" class="btn btn-danger font-weight-bold fa-pull-right">
                        <i class="feather icon-rotate-ccw mr-2"></i>Quay lại
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
