@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Tìm kiếm</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="search-form" action="{{ route('admin.product.index') }}" method="GET" onsubmit="return searchForm()">
                <div class="row">
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Cửa hàng</label>
                        <br>
                        <select class="form-control select-custom" name="store_id">
                            <option value="" selected disabled>Chọn cửa hàng . . .</option>
                            @foreach ($stores as $store)
                                <option @selected(!empty($params['store_id']) && $store->id == $params['store_id']) value="{{ $store->id }}">{{ $store->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('store_id')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Danh mục sản phẩm</label>
                        <select class="form-control select-custom" name="category_id">
                            <option value="" selected disabled>Chọn danh mục . . .</option>
                            @foreach ($categories as $category)
                                <option @selected(!empty($params['category_id']) && $category->id == $params['category_id']) value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Sản phẩm</label>
                        <input type="text" class="form-control" name="name" value=""
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-success font-weight-bold">
                    <i class="feather icon-search mr-2"></i>Tìm kiếm
                </button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Danh sách tài khoản</h5>
            <hr>
        </div>
        <div class="card-body table-border-style">
            <div class="row mb-3 col-5">
                <label class="font-weight-bold col-form-label">Hiển thị</label>
                <div class="col-6">
                    <select style="width: 100px;" class="form-control" name="num_record" id="num_record">
                        @foreach (NUMBER_RECORD as $item)
                            <option {{ 10 === $item ? 'selected' : '' }} value="{{ $item }}">
                                {{ $item }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover table-condensed">
                    <thead>
                        <tr>
                            <th>Số thứ tự</th>
                            <th>Hình ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Giá gốc</th>
                            <th>Giá khuyến mãi</th>
                            <th>Lượt xem</th>
                            <th>Multimedia</th>
                            <th>Bài viết</th>
                            <th class="box-control">
                                <a href="{{ route('admin.product.add') }}" class="btn btn-success wid-100" title="Thêm">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="{{ load_image($product->picture) }}" alt="Hình ảnh {{ $product->name }}"
                                        height="100">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->original_price }}</td>
                                <td>{{ $product->promotional_price }}</td>
                                <td>{{ $product->view }}</td>
                                <td>
                                    <a href="{{ route('admin.multimedia.index', ['product_id' => $product->id]) }}"
                                        class="btn btn-secondary" title="Update">
                                        <i class="feather icon-image"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.update', ['product_id' => $product->id]) }}"
                                        class="btn btn-secondary" title="Update">
                                        <i class="feather icon-file-text"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.update', ['product_id' => $product->id]) }}"
                                        class="btn btn-primary" title="Update">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.product.delete', ['product_id' => $product->id]) }}"
                                        class="btn btn-danger" title="Delete">
                                        <i class="feather icon-trash-2"></i>
                                    </a>
                                    {{-- <button
                                        onclick="deleteRecord('{{ route('admin.product.delete', ['product_id' => $product->id]) }}')"
                                        data-href="{{ route('admin.product.delete', ['product_id' => $product->id]) }}"
                                        class="btn btn-danger" title="Delete">
                                        <i class="feather icon-trash-2"></i>
                                    </button> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-pagination">
                {{ $products->links('admin::components.pagination') }}
            </div>
        </div>
    </div>
@endsection
