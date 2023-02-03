@extends('admin::layouts.master')

@section('content')
    <div id="page-wrapper">
        <div class="header">
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
                        <div class="panel-heading">{{ $product->name }}</div>
                        <div class="panel-body">
                            <form role="form"
                                  action="{{ route('admin.product.chapter.add', ['product_id' => $product->id]) }}"
                                  method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Chương</label>
                                        <input type="number" class="form-control" name="chap" value="">
                                        <p class="msg-error hide"></p>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Tên chương</label>
                                        <input type="text" class="form-control" name="name" value="">
                                        <p class="msg-error hide"></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-blue">Hoàn thành</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
