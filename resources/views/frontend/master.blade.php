
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    @include('frontend.includes.style')

    @yield('page-css')
</head>

<body>
<div class="page-wrapper">
    <div class="top-notice text-white bg-dark">
        <div class="container text-center">
            <h5 class="d-inline-block mb-0">Get Up to <b>40% OFF</b> New-Season Styles</h5>
            <a href="demo1-shop.html" class="category">MEN</a>
            <a href="demo1-shop.html" class="category">WOMEN</a>
            <small>* Limited time only.</small>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .top-notice -->

    @include('frontend.includes.header')
    <!-- End .header -->

    @yield('content')
    <!-- End .main -->

    @include('frontend.includes.footer')
    <!-- End .footer -->
</div>
<!-- End .page-wrapper -->

<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<div class="mobile-menu-overlay"></div>
<!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
        <nav class="mobile-nav">
            <ul class="mobile-menu menu-with-icon">
                <li><a href="demo1.html"><i class="icon-home"></i>Home</a></li>
                <li>
                    <a href="demo1-shop.html" class="sf-with-ul"><i class="sicon-badge"></i>Categories</a>
                    <ul>
                        <li><a href="category.html">Full Width Banner</a></li>
                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                        <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left Sidebar</a></li>
                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                        <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                        <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                        <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                        <li><a href="#">List Types</a></li>
                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                    class="tip tip-new">New</span></a></li>
                        <li><a href="category.html">3 Columns Products</a></li>
                        <li><a href="category-4col.html">4 Columns Products</a></li>
                        <li><a href="category-5col.html">5 Columns Products</a></li>
                        <li><a href="category-6col.html">6 Columns Products</a></li>
                        <li><a href="category-7col.html">7 Columns Products</a></li>
                        <li><a href="category-8col.html">8 Columns Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="demo1-product.html" class="sf-with-ul"><i class="sicon-basket"></i>Products</a>
                    <ul>
                        <li>
                            <a href="#" class="nolink">PRODUCT PAGES</a>
                            <ul>
                                <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                <li><a href="product.html">SALE PRODUCT</a></li>
                                <li><a href="product.html">FEATURED & ON SALE</a></li>
                                <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                            <ul>
                                <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                <li><a href="#">BUILD YOUR OWN</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="sf-with-ul"><i class="sicon-envelope"></i>Pages</a>
                    <ul>
                        <li>
                            <a href="wishlist.html">Wishlist</a>
                        </li>
                        <li>
                            <a href="cart.html">Shopping Cart</a>
                        </li>
                        <li>
                            <a href="checkout.html">Checkout</a>
                        </li>
                        <li>
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="forgot-password.html">Forgot Password</a>
                        </li>
                    </ul>
                </li>
                <li><a href="blog.html"><i class="sicon-book-open"></i>Blog</a></li>
                <li><a href="demo1-about.html"><i class="sicon-users"></i>About Us</a></li>
            </ul>

            <ul class="mobile-menu menu-with-icon mt-2 mb-2">
                <li class="border-0">
                    <a href="#" target="_blank"><i class="sicon-star"></i>Buy Porto!<span
                            class="tip tip-hot">Hot</span></a>
                </li>
            </ul>

            <ul class="mobile-menu">
                <li><a href="login.html">My Account</a></li>
                <li><a href="demo1-contact.html">Contact Us</a></li>
                <li><a href="wishlist.html">My Wishlist</a></li>
                <li><a href="#">Site Map</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="login.html" class="login-link">Log In</a></li>
            </ul>
        </nav>
        <!-- End .mobile-nav -->

        <form class="search-wrapper mb-2" action="#">
            <input type="text" class="form-control mb-0" placeholder="Search..." required />
            <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
        </form>

        <div class="social-icons">
            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
            </a>
            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
            </a>
            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
            </a>
        </div>
    </div>
    <!-- End .mobile-menu-wrapper -->
</div>
<!-- End .mobile-menu-container -->

<div class="sticky-navbar">
    <div class="sticky-info">
        <a href="demo1.html">
            <i class="icon-home"></i>Home
        </a>
    </div>
    <div class="sticky-info">
        <a href="demo1-shop.html" class="">
            <i class="icon-bars"></i>Categories
        </a>
    </div>
    <div class="sticky-info">
        <a href="wishlist.html" class="">
            <i class="icon-wishlist-2"></i>Wishlist
        </a>
    </div>
    <div class="sticky-info">
        <a href="login.html" class="">
            <i class="icon-user-2"></i>Account
        </a>
    </div>
    <div class="sticky-info">
        <a href="cart.html" class="">
            <i class="icon-shopping-cart position-relative">
                <span class="cart-count badge-circle">3</span>
            </i>Cart
        </a>
    </div>
</div>

<div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form" style="background: #f1f1f1 no-repeat center/cover url({{ asset('/frontend/assets/images/newsletter_popup_bg.jpg') }})">
    <div class="newsletter-popup-content">
        <img src="{{ asset('/frontend/') }}/assets/images/logo.png" width="111" height="44" alt="Logo" class="logo-newsletter">
        <h2>Subscribe to newsletter</h2>

        <p>
            Subscribe to the Porto mailing list to receive updates on new arrivals, special offers and our promotions.
        </p>

        <form action="#">
            <div class="input-group">
                <input type="email" class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Your email address" required />
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
        <div class="newsletter-subscribe">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                <label for="show-again" class="custom-control-label">
                    Don't show this popup again
                </label>
            </div>
        </div>
    </div>
    <!-- End .newsletter-popup-content -->

    <button title="Close (Esc)" type="button" class="mfp-close">
        ×
    </button>
</div>
<!-- End .newsletter-popup -->

<a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

<!-- Plugins JS File -->
@include('frontend.includes.script')



@yield('page-js')
</body>


<!-- Mirrored from portotheme.com/html/porto_ecommerce/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Feb 2022 18:58:15 GMT -->
</html>
