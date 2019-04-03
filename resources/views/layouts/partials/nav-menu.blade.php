<div class="navigation-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- navigation section -->
                <div class="main-menu d-none d-lg-block">
                    <nav>
                        <ul>
                            <li class="active menu-item-has-children"><a href="{{ Route('website.index') }}">HOME</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ Route('website.index') }}">Home Shop 1</a></li>
                                    <li><a href="{{ Route('website.index-2') }}">Home Shop 2</a></li>
                                    <li><a href="{{ Route('website.index-3') }}">Home Shop 3</a></li>
                                    <li><a href="{{ Route('website.index-4') }}">Home Shop 4</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="#">PAGES</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Page List One</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ Route('website.cart') }}">Cart</a></li>
                                            <li><a href="{{ Route('website.checkout') }}">Checkout</a></li>
                                            <li><a href="{{ Route('website.wishlist') }}">Wishlist</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">page list two</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ Route('website.my-account') }}">My Account</a></li>
                                            <li><a href="{{ Route('website.login-register') }}">Login Register</a></li>
                                            <li><a href="{{ Route('website.faq') }}">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Page list three</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ Route('website.compare') }}">Compare</a></li>
                                            <li><a href="{{ Route('website.contact') }}">Contact</a></li>
                                            <li><a href="{{ Route('website.about') }}">About Us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="{{ Route('website.shop-left-sidebar') }}">SHOP</a>
                                <ul class="mega-menu four-column">
                                    <li><a href="#">Shop Grid</a>
                                        <ul>
                                            <li><a href="{{ Route('website.shop-3-column') }}">shop 3 column</a></li>
                                            <li><a href="{{ Route('website.shop-4-column') }}">shop 4 column</a></li>
                                            <li><a href="{{ Route('website.shop-left-sidebar') }}">shop left sidebar</a></li>
                                            <li><a href="{{ Route('website.shop-right-sidebar') }}">shop right sidebar</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="shop-list-left-sidebar">Shop List</a>
                                        <ul>
                                            <li><a href="{{ Route('website.shop-list') }}">shop List</a></li>
                                            <li><a href="{{ Route('website.shop-list-left-sidebar') }}">shop List Left Sidebar</a></li>
                                            <li><a href="{{ Route('website.shop-list-right-sidebar') }}">shop List Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="single-product">Single Product</a>
                                        <ul>
                                            <li><a href="{{ Route('website.single-product') }}">Single Product</a></li>
                                            <li><a href="{{ Route('website.single-product-variable') }}">Single Product variable</a></li>
                                            <li><a href="{{ Route('website.single-product-affiliate') }}">Single Product affiliate</a></li>
                                            <li><a href="{{ Route('website.single-product-group') }}">Single Product group</a></li>
                                            <li><a href="{{ Route('website.single-product-tabstyle-2') }}">Tab Style 2</a></li>
                                            <li><a href="{{ Route('website.single-product-tabstyle-3') }}">Tab Style 3</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="single-product">Single Product</a>
                                        <ul>
                                            <li><a href="{{ Route('website.single-product-gallery-left') }}">Gallery Left</a></li>
                                            <li><a href="{{ Route('website.single-product-gallery-right') }}">Gallery Right</a></li>
                                            <li><a href="{{ Route('website.single-product-sticky-left') }}">Sticky Left</a></li>
                                            <li><a href="{{ Route('website.single-product-sticky-right') }}">Sticky Right</a></li>
                                            <li><a href="{{ Route('website.single-product-slider-box') }}">Slider Box</a></li>
                                        </ul>
                                    </li>
                                    <li class="megamenu-banner d-none d-lg-block mt-30 w-100">
                                        <a href="shop-left-sidebar" class="mb-0">
                                            <img src="{{ asset('assets/img/banners/img-bottom-menu.jpg') }}" class="img-fluid" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="blog-left-sidebar">BLOG</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ Route('website.blog-left-sidebar') }}">Blog Left Sidebar</a></li>
                                    <li><a href="{{ Route('website.blog-right-sidebar') }}">Blog Right Sidebar</a></li>
                                    <li><a href="{{ Route('website.blog-post-left-sidebar') }}">Blog Post Left Sidebar</a></li>
                                    <li><a href="{{ Route('website.blog-post-right-sidebar') }}">Blog Post Right Sidebar</a></li>
                                    <li><a href="{{ Route('website.blog-post-image-format') }}">Blog Post Image Format</a></li>
                                    <li><a href="{{ Route('website.blog-post-image-gallery') }}">Blog Post Image Gallery</a></li>
                                    <li><a href="{{ Route('website.blog-post-audio-format') }}">Blog Post Audio Format</a></li>
                                    <li><a href="{{ Route('website.blog-post-video-format') }}">Blog Post Video Format</a></li>
                                </ul>
                            </li>

                            <li><a href="contact">CONTACT</a></li>
                        </ul>
                    </nav>

                </div>
                <!-- end of navigation section -->

                <!-- Mobile Menu -->
                <div class="mobile-menu-wrapper d-block d-lg-none pt-15">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
</div>
