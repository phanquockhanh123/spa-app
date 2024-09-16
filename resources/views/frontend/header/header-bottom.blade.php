<div class="container">
    <nav class="main-nav w-100">
        <ul class="menu">
            <li class="active">
                <a href="{{ url('/') }}">Home</a>
            </li>
            <li>
                <a href="{{ url('/categories/index') }}">Categories</a>
                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="nolink">VARIATION 1</a>
                            <ul class="submenu">
                                <li><a href="category.html">Fullwidth Banner</a></li>
                                <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a>
                                </li>
                                <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a>
                                </li>
                                <li><a href="category.html">Left Sidebar</a></li>
                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a>
                                </li>
                                <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <a href="#" class="nolink">VARIATION 2</a>
                            <ul class="submenu">
                                <li><a href="category-list.html">List Types</a></li>
                                <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a>
                                </li>
                                <li><a href="category.html">3 Columns Products</a></li>
                                <li><a href="category-4col.html">4 Columns Products</a></li>
                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                <li><a href="category-8col.html">8 Columns Products</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 p-0">
                            <div class="menu-banner">
                                <figure>
                                    <img src="assets/images/menu-banner.jpg" width="192" height="313"
                                        alt="Menu banner">
                                </figure>
                                <div class="banner-content">
                                    <h4>
                                        <span class="">UP TO</span><br />
                                        <b class="">50%</b>
                                        <i>OFF</i>
                                    </h4>
                                    <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .megamenu -->
            </li>
            <li>
                <a href="{{ url('/products/index') }}">Products</a>
                <div class="megamenu megamenu-fixed-width">
                    <div class="row">
                        <div class="col-lg-4">
                            <a href="#" class="nolink">PRODUCT PAGES</a>
                            <ul class="submenu">
                                <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                <li><a href="product.html">SALE PRODUCT</a></li>
                                <li><a href="product.html">FEATURED & ON SALE</a></li>
                                <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                            </ul>
                        </div>
                        <!-- End .col-lg-4 -->

                        <div class="col-lg-4">
                            <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                            <ul class="submenu">
                                <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                <li><a href="#">BUILD YOUR OWN</a></li>
                            </ul>
                        </div>
                        <!-- End .col-lg-4 -->

                        <div class="col-lg-4 p-0">
                            <div class="menu-banner menu-banner-2">
                                <figure>
                                    <img src="{{ asset('assets/images/menu-banner-1.jpg') }}" width="182" height="317"
                                        alt="Menu banner" class="product-promo">
                                </figure>
                                <i>OFF</i>
                                <div class="banner-content">
                                    <h4>
                                        <span class="">UP TO</span><br />
                                        <b class="">50%</b>
                                    </h4>
                                </div>
                                <a href="category.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                            </div>
                        </div>
                        <!-- End .col-lg-4 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .megamenu -->
            </li>
            <li><a href="{{ url('/blogs/index') }}">Blog</a></li>
            <li><a href="{{ url('/contacts/index') }}">Contact Us</a></li>
            <!-- <li class="float-right"><a href="https://1.envato.market/DdLk5" rel="noopener" class="pl-5"
                    target="_blank">Buy Porto!</a></li>
            <li class="float-right"><a href="#" class="pl-5">Special Offer!</a></li> -->
        </ul>
    </nav>
</div>
