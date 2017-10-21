<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
   
  @include('partialsAdmin._head')

</head>
    <!-- END  HEAD-->

<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap">

        <!-- HEADER SECTION -->
        <div id="top">
        
            <!--nav bar-->
            @include('partialsAdmin._nav')
            <!--end nav bar-->
        
        </div>
        <!-- END HEADER SECTION -->


        <!-- MENU SECTION -->
        <div id="left">
            
            <!--User Infos-->
            @include('partialsAdmin._menuUser')

            <!-- Menu Items -->
            <!--@include('partialsAdmin._menuItems')-->
            @yield('menu')

        </div>
        <!--END MENU SECTION -->

        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner" style="min-height:-webkit-fill-available;">
                <div class="row">
                    <div class="col-lg-12">

                        @yield('content')

                    </div>
                </div>
            </div>

        </div>
       <!--END PAGE CONTENT -->

       <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            @yield('aside')
        </div>
         <!-- END RIGHT STRIP  SECTION -->

    </div>
    <!--END MAIN WRAPPER -->


    <!-- FOOTER -->
      @include('partialsAdmin._footer')
    <!--END FOOTER -->

    <!-- GLOBAL SCRIPTS -->
      @include('partialsAdmin._javascript')
    <!-- END GLOBAL SCRIPTS -->


</body>
    <!-- END BODY-->
    
</html>