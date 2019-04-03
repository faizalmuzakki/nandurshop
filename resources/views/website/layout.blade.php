<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
	@include('layouts.partials.head')
</head>

<body>

    <!--====================  Header area ====================-->
    <div class="header-area header-sticky">
        <!--====================  Navigation top ====================-->
		@include('layouts.partials.nav-top')
        <!--====================  End of Navigation top  ====================-->

        <!--====================  navigation menu ====================-->
		@include('layouts.partials.nav-menu')
        <!--====================  End of navigation menu  ====================-->
    </div>
    <!--====================  End of Header area  ====================-->

    @yield('content')

    <!--====================  footer area ====================-->
	@include('layouts.partials.footer')
    <!--====================  End of footer area  ====================-->

    <!-- scroll to top  -->
    <a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->


	<!--=============================================
    =            JS files        =
    =============================================-->
	@include('layouts.partials.js')
    <!--=====  End of JS files ======-->

</body>

</html>
