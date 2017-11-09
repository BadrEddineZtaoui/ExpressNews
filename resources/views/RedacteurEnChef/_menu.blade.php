<ul id="menu" class="collapse">
            
    <li class="panel">
        <a href="{{ route('refIndex') }}" >
            <i class="icon-home"></i> Dashboard
        </a>                   
    </li>
    
    <li class="panel ">
        <a href="{{ route('refRedacteurs') }}" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
            <i class="icon-group"> </i> Redacteurs     

            <span class="pull-right">
              <i class="icon-angle-left"></i>
            </span>
           &nbsp; <span class="label label-default">2</span>&nbsp;
        </a>
        <ul class="collapse" id="component-nav">
           
            <li class=""><a href="button.html"><i class="icon-angle-right"></i> Redacteurs en Cours... </a></li>

        </ul>
    </li>

    <li class="panel ">
        <a href="{{ route('refArticles') }}" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#form-nav">
            <i class="icon-file-text"> </i> Articles     

            <span class="pull-right">
              <i class="icon-angle-left"></i>
            </span>
           &nbsp; <span class="label label-default">10</span>&nbsp;
        </a>
        <ul class="collapse" id="form-nav">
           
            <li class=""><a href="button.html"><i class="icon-angle-right"></i> Articles en Cours... </a></li>

        </ul>
    </li>

    <li><a href="{{ route('refComments') }}"><i class="icon-comment"></i> Commentaires 
        &nbsp; <span class="label label-default">5</span>&nbsp;
    </a></li>

    <li class="panel ">
        <a href="{{ route('refSousCat') }}"><i class="icon-list-ul"></i> Sous Categories</a>
    </li>
</ul>