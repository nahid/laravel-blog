<ul class="pagination">

    <li class="page-item page-prev">
        @if(!empty($prev))
        <a href="{{ $prev }}" class="page-link" aria-label="Prev"><span aria-hidden="true"> &larr; Previous page</span></a>
        @endif
    </li>

    <li class="page-item page-next">
        @if(!empty($next))
        <a href="{{ $next }}" class="page-link" aria-label="Next"><span aria-hidden="true">Next page &rarr;</span></a>
        @endif
    </li>
</ul>
