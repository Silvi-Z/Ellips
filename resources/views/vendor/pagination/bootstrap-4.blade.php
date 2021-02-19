@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
{{--        @if ($paginator->onFirstPage())--}}
{{--            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--                <span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--            </li>--}}
{{--        @endif--}}

        @foreach ($elements as $element)
            @foreach ($element as $page => $url)
                    @if ($paginator->currentPage() > 4 && $page === 2)
                        <li class="page-item " style="pointer-events: none;"><span class="page-link">...</span></li>
                    @endif
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @elseif ($page === $paginator->currentPage() + 1 || $page === $paginator->currentPage() + 2 || $page === $paginator->currentPage() - 1 || $page === $paginator->currentPage() - 2 || $page === $paginator->lastPage() || $page === 1)
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                    @if ($paginator->currentPage() < $paginator->lastPage() - 3 && $page === $paginator->lastPage() - 1)
                        <li class="page-item disabled"><span class="page-link">...</span></li>
                    @endif
                @endforeach
            @endforeach

        {{-- Next Page Link --}}
{{--        @if ($paginator->hasMorePages())--}}
{{--            <li class="page-item">--}}
{{--                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--            </li>--}}
{{--        @else--}}
{{--            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--                <span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--            </li>--}}
{{--        @endif--}}
    </ul>
@endif
