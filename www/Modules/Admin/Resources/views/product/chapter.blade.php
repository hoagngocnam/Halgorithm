@extends('admin::layouts.index')
@section('main-content')
    <div id="page-wrapper">
        <div class="header">
            {{-- <h1 class="page-header">
			Dashboard <small>Summary of your App</small>
		</h1> --}}
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
        <div id="page-inner">
            {{-- Form Search --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tìm Kiếm</div>
                        <div class="panel-body">
                            <form role="form"
                                action="{{ route('admin.product.chapter', ['product_id' => $product->id]) }}"
                                method="GET">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6  form-group">
                                        <label>Tên truyện</label>
                                        <input class="form-control" name="name" value="{{ $parameters['name'] ?? '' }}">
                                        <p class="msg-error hide"></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6  form-group">
                                        <label>Tác giả</label>
                                        <input class="form-control" name="name" value="{{ $parameters['name'] ?? '' }}">
                                        <p class="msg-error hide"></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Hoàn thành</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End List Accounts --}}
            {{-- List Accounts --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">{{ $product->name }}</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Số thứ tự</th>
                                            <th>Chương</th>
                                            <th>Tên chương</th>
                                            <th>Lượt xem</th>
                                            <th>Ngày chỉnh sửa</th>
                                            <th>Ngày tạo</th>
                                            <th>Nội dung chương</th>
                                            <th>
                                                <a href="{{ route('admin.product.chapter.add', ['product_id' => $product->id]) }}"
                                                    class="btn btn-success">Thêm</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chapters as $index => $chapter)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ 'Chương số ' . $chapter->id }}</td>
                                                <td>{{ $chapter->name }}</td>
                                                <td>{{ $chapter->view }}</td>
                                                <td>{{ $chapter->updated_at }}</td>
                                                <td>{{ $chapter->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.product.chapter.content', [
                                                        'product_id' => $product->id,
                                                        'chapter_id' => $chapter->id,
                                                    ]) }}"
                                                        class="btn btn-primary">Nội dung</a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.product.chapter.update', [
                                                        'product_id' => $product->id,
                                                        'chapter_id' => $chapter->id,
                                                    ]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('admin.product.chapter.delete', [
                                                        'product_id' => $product->id,
                                                        'chapter_id' => $chapter->id,
                                                    ]) }}"
                                                        class="btn btn-danger">Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $chapters->links('admin::components.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
            {{-- End List Accounts --}}
        </div>
    </div>
@endsection
