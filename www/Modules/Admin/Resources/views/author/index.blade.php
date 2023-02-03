@extends('admin::layouts.master')
@section('content')
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
                            <form role="form" action="{{ route('admin.author.index') }}" method="GET">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6  form-group">
                                        <label>Địa chỉ Mail</label>
                                        <input class="form-control" name="mail_adr"
                                            value="{{ $parameters['mail_adr'] ?? '' }}">
                                        <p class="msg-error hide"></p>
                                    </div>
                                    <div class="col-lg-6 col-md-6 form-group">
                                        <label>Họ và tên</label>
                                        <input class="form-control" name="full_name"
                                            value="{{ $parameters['full_name'] ?? '' }}">
                                        <p class="msg-error hide"></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Hoàn thành</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End List authors --}}
            {{-- List authors --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">Tài Khoản</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Số thứ tự</th>
                                            <th>Tác giả</th>
                                            <th>Ngày sinh</th>
                                            <th>Ngày mất</th>
                                            <td>Mô tả</td>
                                            <th>
                                                <a href="{{ route('admin.author.add') }}" class="btn btn-success">Thêm</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($authors as $index => $author)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $author->name }}</td>
                                                <td>{{ $author->birthday }}</td>
                                                <td>{{ $author->date_of_death }}</td>
                                                <td>{{ $author->description }}</td>
                                                <td>
                                                    <a href="{{ route('admin.author.update', ['author_id' => $author->id]) }}"
                                                        class="btn btn-primary">Sửa</a>
                                                    <a href="{{ route('admin.author.delete', ['author_id' => $author->id]) }}"
                                                        class="btn btn-danger">Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $authors->links('admin::components.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
            {{-- End List authors --}}
        </div>
    </div>
@endsection
