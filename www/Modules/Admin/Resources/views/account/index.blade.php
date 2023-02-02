@extends('admin::layouts.main')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="f-17">Tìm kiếm</h5>
            <hr>
        </div>
        <div class="card-body">
            <form class="search-form" action="{{ route('admin.account.index') }}" method="GET"
                  onsubmit="return searchForm()">
                <div class="row">
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Địa chỉ Mail</label>
                        <input type="text" class="form-control" name="mail_adr"
                               value="{{ $parameters['mail_adr'] ?? old('mail_adr') }}"
                               placeholder="Nhập địa chỉ mail . . ."/>
                        @error('mail_adr')
                        <p class="error-msg">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row-input-group col-md-6 form-group">
                        <label class="text-label">Họ và tên</label>
                        <input type="text" class="form-control" name="full_name"
                               value="{{ $parameters['full_name'] ?? old('full_name') }}"
                               placeholder="Nhập họ và tên . . ."/>
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
            <h5 class="f-17">Quản trị viên</h5>
            <a href="{{ route('admin.account.export') }}" class="btn btn-success font-weight-bold">
                <i class="feather icon-file mr-2"></i>Dowload CSV
            </a>
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
                        <th>Họ và tên</th>
                        <th>Địa chỉ Mail</th>
                        <th>Đăng nhập gần đây</th>
                        <th class="box-control">
                            <a href="{{ route('admin.account.add') }}" class="btn btn-success w-100" title="Thêm">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($accounts as $index => $account)
                        <tr>
                            <td>{{ numeral($accounts->currentPage(), $index, $accounts->perPage()) }}</td>
                            <td>{{ $account->full_name }}</td>
                            <td>{{ $account->mail_adr }}</td>
                            <td>{{ $account->latest_comment_id ?? '' }}</td>
                            <td>
                                <a href="{{ route('admin.account.update', ['account_id' => $account->id]) }}"
                                   class="btn btn-primary">
                                    <i class="feather icon-edit"></i>
                                </a>
                                <a href="{{ route('admin.account.delete', ['account_id' => $account->id]) }}"
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
                {{ $accounts->links('admin::components.pagination') }}
            </div>
        </div>
    </div>
@endsection
