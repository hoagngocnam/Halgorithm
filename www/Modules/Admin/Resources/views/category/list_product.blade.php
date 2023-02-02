@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Tìm kiếm</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="search-form" action="{{ route('admin.account.index') }}" method="GET" onsubmit="return searchForm()">
                <div class="row">
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Thể loại</label>
                        <input type="text" class="form-control" name="mail_adr" value=""
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('mail_adr')
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
            <h5>{{ $category->name }}</h5>
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
                            <th>Lượt xem</th>
                            <th>Ngày chỉnh sửa</th>
                            <th>Ngày tạo</th>
                            <th>Chương</th>
                            <th class="box-control">
                                <a href="{{ route('admin.category.product.add', ['category_id' => 1]) }}"
                                    class="btn btn-success wid-100" title="Thêm">
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
                                <td>{{ $product->view }}</td>
                                <td>{{ $product->updated_at }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="{{ route('admin.product.chapter', ['product_id' => $product->id]) }}"
                                        class="btn btn-info">
                                        <i class="feather icon-list"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.category.update', ['id' => $product->id]) }}"
                                        class="btn btn-primary" title="Update">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <button
                                        onclick="deleteRecord('{{ route('admin.category.delete', ['id' => $product->id]) }}')"
                                        data-href="{{ route('admin.category.delete', ['id' => $product->id]) }}"
                                        class="btn btn-danger" title="Delete">
                                        <i class="feather icon-trash-2"></i>
                                    </button>
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
