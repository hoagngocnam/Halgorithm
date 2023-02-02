@extends('admin::layouts.master')
@section('content')
    <div id="page-wrapper">
        <div class="header">
            <h1 class="page-header">
                403 {{ $exception->getMessage() }}
            </h1>
        </div>
        <div id="page-inner">
            <footer>
                <p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez</a></p>
            </footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
@endsection
