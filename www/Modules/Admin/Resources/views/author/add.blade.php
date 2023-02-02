@extends('admin::layouts.master')
@section('content')
    <div id="page-wrapper">
        {{-- Breakcome --}}
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">Thêm tài khoản</div>
                        <div class="panel-body">
                            <form role="form" action="{{ route('admin.author.add') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Tên tác giả</label>
                                        <input type="text" class="form-control" name="name" value=""
                                            placeholder="Nhập tên tác giả . . .">
                                        <p class="msg-error hide"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label>Ngày sinh</label>
                                        <input type="date" class="form-control" name="birthday" value=""
                                            placeholder="Nhập ngày sinh . . .">
                                        <p class="msg-error hide"></p>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Ngày mất</label>
                                        <input type="date" class="form-control" name="date_of_death" value=""
                                            placeholder="Nhập ngày mất . . .">
                                        <p class="msg-error hide"></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Mô tả</label>
                                        <textarea name="description" class="form-control" placeholder="Mô tả về tác giả . . ."></textarea>
                                        <p class="msg-error hide"></p>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Hoàn thành</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
