
<a class="btn btn-xs {{  ($sortBy==$sortKey) ? 'btn-success' : 'btn-default'  }} " href="{{ urlSortBy(  ($sortBy != $sortKey ) ? 1 : $page,$sortKey,$sortNextType,$search, isset($route) ? $route : null  ) }}">  
    @if ($sortKeyType=='txt')
    <i class="fa  fa-{{  ($sortKey==$sortBy  && $sortType=='asc') ? 'sort-alpha-asc' : 'sort-alpha-desc'  }} "></i>
    @elseif ($sortKeyType=='num')
    <i class="fa  fa-{{  ($sortKey==$sortBy  && $sortType=='asc') ? 'sort-amount-asc' : 'sort-amount-desc'  }} "></i>
    @elseif ($sortKeyType=='check')
    <i class="fa  fa-{{  ($sortKey==$sortBy  && $sortType=='asc') ? 'close' : 'check'  }} "></i> 
    @elseif ($sortKeyType=='onOff')
    <i class="fa  fa-{{  ($sortKey==$sortBy  && $sortType=='asc') ? 'eye-slash' : 'eye'  }} "></i>
    @endif
</a>
{{$title}}