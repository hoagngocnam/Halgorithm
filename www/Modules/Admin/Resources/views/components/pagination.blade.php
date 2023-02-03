@php
$current_page = $paginator->currentPage();
$per_page = $paginator->perPage();
$from_record = ($current_page - 1) * $per_page + 1;
$to_record = ($current_page - 1) * $per_page + $paginator->count();
$total_record = $paginator->total();
$total_page = $paginator->lastPage();
$from_page = 1;
$to_page = 5;

if ($current_page > 3) {
    if ($total_page - $current_page > 2) {
        $from_page = $current_page - 2;
        $to_page = $current_page + 2;
    } else {
        $from_page = $total_page - 4;
        $to_page = $total_page;
    }
}
@endphp
@if ($paginator->hasPages())
    <table class="table table-bordered table-hover table-condensed col-2 fa-pull-left">
        <tr>
            <th>Hiển thị</th>
            <td>{{ $from_record }} - {{ $to_record }}</td>
        </tr>
        <tr>
            <th>Tổng số bản ghi</th>
            <td>{{ $total_record }}</td>
        </tr>
        <tr>
            <th>Tổng số trang </th>
            <td>{{ $total_page }}</td>
        </tr>
    </table>
    <nav class="fa-pull-right">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if (!$paginator->onFirstPage())
                <li class="page-item">
                    <a class="page-link prev-page" data-page={{ $current_page - 1 }} href="#" rel="prev">
                        <i class="feather icon-chevron-left"></i>
                    </a>
                </li>
            @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $current_page)
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @elseif ($page >= $from_page && $page <= $to_page)
                            <li class="page-item">
                                <a class="page-link active-page" data-page={{ $page }}
                                    href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($total_page - $to_page > 0)
                <li class="page-item">
                    <span class="page-link">...</span>
                </li>
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link next-page" data-page={{ $current_page + 1 }} href="#" rel="next"
                        aria-label="@lang('pagination.next')">
                        <i class="feather icon-chevron-right"></i>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
    <div class="clear-both"></div>
@endif
