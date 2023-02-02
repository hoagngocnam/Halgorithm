@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="f-17">Tìm kiếm</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="search-form" action="{{ route('admin.account.index') }}" method="GET" onsubmit="return searchForm()">
                <div class="row">
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Tên cửa hàng</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Nhập địa chỉ mail . . ." />
                        @error('name')
                            <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Tên chủ sở hữu</label>
                        <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}"
                            placeholder="Nhập tên chủ sở hữu . . ." />
                        @error('full_name')
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
            <h5 class="f-17">Cửa hàng</h5>
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
                            <th>Cửa hàng</th>
                            <th>Chủ sở hữu</th>
                            <th>Màu sắc</th>
                            <th>Danh sách sản phẩm</th>
                            <th class="box-control">
                                <a href="{{ route('admin.stores.add') }}" class="btn btn-success w-100" title="Thêm">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stores as $index => $store)
                            <tr>
                                <td>{{ numeral($stores->currentPage(), $index, $stores->perPage()) }}</td>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->full_name }}</td>
                                <td>
                                    <div
                                        style="height: 25px;margin: auto;
                                    width: 80px;background-color: {{ $store->background }}">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('admin.product.index', ['store_id' => $store->id]) }}"
                                        class="btn btn-info">
                                        <i class="feather icon-list"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.stores.update', ['store_id' => $store->id]) }}"
                                        class="btn btn-primary">
                                        <i class="feather icon-edit"></i>
                                    </a>
                                    <a href="{{ route('admin.stores.delete', ['store_id' => $store->id]) }}"
                                        class="btn btn-danger">
                                        <i class="feather icon-trash-2"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-pagination">
                {{ $stores->links('admin::components.pagination') }}
            </div>
        </div>
    </div>
@endsection
