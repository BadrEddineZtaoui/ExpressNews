<ul id="menu" class="collapse">
    <li class="panel">
        <a href="{{ route('adminIndex') }}" ><i class="icon-home"></i> Dashboard</a>         
    </li>

    <li class="panel ">
        <a href="{{ route('adminArticles') }}"><i class="icon-file-text"> </i> Articles</a>
    </li>

    <li class="panel ">
        <a href="{{ route('adminRefs') }}"><i class="icon-group"></i> Redacteurs En Chef </a>
    </li>

    <li class="panel ">
        <a href="{{ route('adminReds') }}"><i class="icon-group"></i> Redacteurs </a>
    </li>
    
    <li class="panel ">
        <a href="{{ route('adminTags') }}"><i class="icon-tags"></i> Tags</a>
    </li>

    <li class="panel ">
        <a href="{{ route('categories.index') }}"><i class="icon-list-ul"></i> Categories</a>
    </li>
</ul>