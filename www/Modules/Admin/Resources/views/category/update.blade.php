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
            <div class="row">
                <div class="col-md-12">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Thêm thể loại</div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('admin.category.update', ['id' => $category->id]) }}"
                                method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Thể Loại</label>
                                        <input class="form-control" name="name" value="{{ $category->name }}">
                                        <p class="msg-error hide">Nhập thể loại !</p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Hoàn thành</button>
                                <a href="{{ back() }}" class="btn btn-success">Hoàn thành</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
