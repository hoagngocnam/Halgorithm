@extends('admin::layouts.index')
@section('main-content')
    <div id="page-wrapper">
        <div class="header">
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
                            <form role="form" action="{{ route('admin.product.list') }}" method="GET">
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
                        <div class="panel-heading">{{ $product->name . ' - chương ' . $chapter->chap }}</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Số thứ tự</th>
                                            <th>Hình ảnh</th>
                                            <th>Ngày chỉnh sửa</th>
                                            <th>Ngày tạo</th>
                                            <th>
                                                <a href="{{ route('admin.product.chapter.content.add', [
                                                    'product_id' => $product->id,
                                                    'chapter_id' => $chapter->id,
                                                ]) }}"
                                                    class="btn btn-success">Thêm</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chapterContents as $index => $content)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $content->photo_path }}</td>
                                                <td>{{ $content->updated_at }}</td>
                                                <td>{{ $content->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('admin.product.chapter.content.update', ['id' => $content->id]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('admin.product.chapter.content.delete', ['id' => $content->id]) }}"
                                                        class="btn btn-danger">Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $chapterContents->links('admin::components.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
            {{-- End List Accounts --}}
        </div>
    </div>
@endsection
