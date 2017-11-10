<ul id="menu" class="collapse">
            
    <li class="panel">
        <a href="#" >
            <i class="icon-home"></i> Dashboard 
          <!-- liste des articles selon redacteurs -->  
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

        <ul class="in" id="component-nav">
                       
                        <li class=""><a href="{{ route('refRedacteurs') }}" ><i class="icon-angle-right"></i> Demande de poste rédacteur </a></li>
                        <li class=""><a href="{{ route('listRedacteurs') }}"><i class="icon-angle-right"></i> Liste des Rédacteurs </a></li>
                        <li class=""><a href="progress.html"><i class="icon-angle-right"></i> Progress </a></li>
                        <li class=""><a href="tabs_panels.html"><i class="icon-angle-right"></i> Tabs &amp; Panels </a></li>
                        <li class=""><a href="notifications.html"><i class="icon-angle-right"></i> Notification </a></li>
                         <li class=""><a href="more_notifications.html"><i class="icon-angle-right"></i> More Notification </a></li>
                        <li class=""><a href="modals.html"><i class="icon-angle-right"></i> Modals </a></li>
                          <li class=""><a href="wizard.html"><i class="icon-angle-right"></i> Wizard </a></li>
                         <li class=""><a href="sliders.html"><i class="icon-angle-right"></i> Sliders </a></li>
                        <li class=""><a href="typography.html"><i class="icon-angle-right"></i> Typography </a></li>
                    </ul>





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