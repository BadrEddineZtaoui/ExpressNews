<nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
              
    <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
        <i class="icon-align-justify"></i>
    </a>
    
    <!-- LOGO SECTION -->
        @include('partialsAdmin._logo')
    <!-- END LOGO SECTION -->
    
    <ul class="nav navbar-top-links navbar-right">

        <!-- MESSAGES SECTION -->
            @include('partialsAdmin._navMessages')
        <!--END MESSAGES SECTION -->

        <!--TASK SECTION -->
            @include('partialsAdmin._navTasks')
        <!--END TASK SECTION -->

        <!--ALERTS SECTION -->
            @include('partialsAdmin._navAlerts')
        <!-- END ALERTS SECTION -->

        <!--ADMIN SETTINGS SECTIONS -->
            @include('partialsAdmin._navAdminSettings')
        <!--END ADMIN SETTINGS -->
    </ul>

</nav>