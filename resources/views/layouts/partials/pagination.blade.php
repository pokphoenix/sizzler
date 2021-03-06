<?php
// config
$link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
    <ul class="pagination">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
            <a href="{{ urlSortBy(1,$sortBy,$sortType,$search, isset($route) ? $route : null) }}">First</a>
        </li>
         @if ($paginator->total()>5)
		<li class="disabled">
            <a href="">... </a>
        </li>
		@endif
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <?php
            $half_total_links = floor($link_limit / 2);
            $from = $paginator->currentPage() - $half_total_links;
            $to = $paginator->currentPage() + $half_total_links;
            if ($paginator->currentPage() < $half_total_links) {
               $to += $half_total_links - $paginator->currentPage();
            }
            if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
            }
            ?>
            @if ($from < $i && $i < $to)

                <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                    <a href="{{ urlSortBy($i,$sortBy,$sortType,$search, isset($route) ? $route : null) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor
        @if ($paginator->total()>5)
		<li class="disabled">
            <a href="">... </a>
        </li>
		@endif
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ urlSortBy($paginator->lastPage(),$sortBy,$sortType,$search, isset($route) ? $route : null)  }}">Last</a>
        </li>
    </ul>
@endif