@if($paginator->hasPages())
        <ul class="page-nav list-style">
            @if($paginator->onFirstPage())
                <li class="disabled" disabled>
                    <a href="javascript:void(0)" aria-label="Previous"
                       style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="flaticon-left-arrow-3"></i>
                        </span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="flaticon-left-arrow-3"></i>
                        </span>
                    </a>
                </li>
            @endif


            @foreach ($elements as $element)
                @if(is_string($element))
                    <li disabled>
                        <a href="javascript:void(0)">{{$element}}</a>
                    </li>
                @endif

                @if(is_array($element))
                    @foreach ($element as $page=>$url)
                        @if($page == $paginator->currentPage())
                            <li>
                                <a class="active" href="javascript:void(0)">{{$page}}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a href="{{$url}}">{{$page}}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach



            @if($paginator->hasMorePages())
                <li>
                    <a href="{{$paginator->nextPageUrl()}}" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="flaticon-right-arrow"></i>
                        </span>
                    </a>
                </li>
            @else
                <li class="disabled" disabled>
                    <a href="javascript:void(0)" aria-label="Next" style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="flaticon-right-arrow"></i>
                        </span>
                    </a>
                </li>
            @endif
        </ul>
@endif
