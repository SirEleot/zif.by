@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
                @php
                    //dd($paginator)
                @endphp
                <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
            @endif

           @if ($paginator->currentPage() > 2)
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">{{ $paginator->currentPage() - 1 }}</a>
            </li>
           @endif

            <li class="page-item active" aria-current="page">
                <a class="page-link" href="{{ $paginator->currentPage() }}">{{ $paginator->currentPage() }}</a>
            </li>

            @if ($paginator->currentPage() + 1 != $paginator->lastPage())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">{{ $paginator->currentPage() + 1 }}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="{{ $paginator->path() }}">{{$paginator->lastPage()}}</a></li>
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
