@extends('admin::layouts.index')

@section('main-content')
    @include('admin::layouts.loading')

    @include('admin::layouts.menu')

    @include('admin::layouts.header')

    <section class="pcoded-main-container">
        <div class="pcoded-content">
            @include('admin::components.breadcrumb')
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
@endsection
