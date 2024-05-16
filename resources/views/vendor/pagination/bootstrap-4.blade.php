@if ($paginator->hasPages())
    <style>
        :root {
            --background-color : #090d1f;
            --while-color: #ffff;
            --purple-color: #6941C6;
            --red-color: #C11574;
            --green-color: #026AA2;
            --green-color-2:  #027A48;
            --font-color: #090d1f;
        }
        body .pagination{
            display: flex;
            justify-content: center;
            font-size: 16px;
        }
        body .pagination li a {
            text-decoration: none; /* Remove underline */
            color: white;
        }

        body .pagination li {
            display: inline-block; /* Prevent links from appearing in one line */
            margin-right: 5px; /* Add space between links */
            color: #007bff;
            justify-content: center;
            }

        body.light-mode .pagination li a {
            color: var(--background-color); /* Light text color */
        }
        body.dark-mode .pagination li {
            color: #007bff; /* Light text color */
        }

        body.dark-mode .navbar {
            background-color: var(--background-color); /* Dark mode navbar color */
        }
    </style>
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
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
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
