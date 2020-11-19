@if ($paginator->hasPages())
    <div class="utf-pagination-container margin-top-20">
        <nav class="pagination">
            <ul>
                @if ($paginator->onFirstPage())
                    <li>
                        <a href="#">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ $paginator->previousPageUrl() }}">
                            <i class="fa fa-angle-left"></i>
                        </a>
                    </li>

                @endif


                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="blank">...</li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li><a href="#" class="current-page">{{$page}}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
                @else
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                @endif


            </ul>
        </nav>
    </div>
@endif
