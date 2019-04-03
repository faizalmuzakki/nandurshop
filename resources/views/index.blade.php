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

    <!--====================  hero slider area ====================-->
	@include('layouts.partials.slider')
    <!--====================  End of hero slider area  ====================-->

    <!--====================  split banner area ====================-->
	@include('layouts.partials.banner')
    <!--====================  End of split banner area  ====================-->

    <!--====================  product single row counter slider area ====================-->
	@include('layouts.partials.product-single')
    <!--====================  End of product single row counter slider area  ====================-->

	<!--====================  full banner area ====================-->
	@include('layouts.partials.full-banner')
    <!--====================  End of full banner area  ====================-->

    <!--====================  banner with double row slider ====================-->
	@include('layouts.partials.banner-double-slider')
    <!--====================  End of banner with double row slider  ====================-->

    <!--====================  icon feature area ====================-->
	@include('layouts.partials.icon-feature')
    <!--====================  End of icon feature area  ====================-->

    <!--====================  category area ====================-->
	@include('layouts.partials.category')
    <!--====================  End of category area  ====================-->

    <!--====================  blog post slider area ====================-->
	@include('layouts.partials.post')
    <!--====================  End of blog post slider area  ====================-->

    <!--====================  brand logo slider area ====================-->
	@include('layouts.partials.brand')
    <!--====================  End of brand logo slider area  ====================-->

    <!--====================  newsletter area ====================-->
	@include('layouts.partials.newsletter')
    <!--====================  End of newsletter area  ====================-->

    <!--====================  footer area ====================-->
	@include('layouts.partials.footer')
    <!--====================  End of footer area  ====================-->

    <!-- scroll to top  -->
    <a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->


    <!--=============================================
	=            Quick view modal         =
	=============================================-->
	@include('layouts.partials.quick-view-modal')
	<!--=====  End of Quick view modal  ======-->

    <!--====================  newsletter popup ====================-->
	@include('layouts.partials.newsletter-popup')
    <!--====================  End of newsletter popup  ====================-->


	<!--=============================================
    =            JS files        =
    =============================================-->
	@include('layouts.partials.js')
    <!--=====  End of JS files ======-->

</body>

</html>
