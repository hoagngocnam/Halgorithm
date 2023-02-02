@extends('admin::layouts.index')

@section('main-content')
    @include('admin::layouts.header')

    @include('admin::layouts.sidebar')

    @yield('content')
@endsection
