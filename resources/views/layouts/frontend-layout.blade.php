
@include('partials.frontend._header')
<body>
@include('partials.frontend._header-nav')


@yield('main-content')


@include('partials.frontend._footer')

<div id="back2top"><i class="icon icon-arrow-up"></i></div>
<div class="ps-site-overlay"></div>
<div class="ps-panel--sidebar" id="cart-mobile">
    <div class="ps-panel__header">
        <h3>Shopping Cart</h3>
    </div>
    <div class="navigation__content">
        <div class="ps-cart--mobile">
            <div class="ps-cart__content">
                <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="index.html#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="index.html#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                        <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                </div>
            </div>
            <div class="ps-cart__footer">
                <h3>Sub Total:<strong>$59.99</strong></h3>
                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
            </div>
        </div>
    </div>
</div>
<!--include ../../data/menu/menu-product-categories-->
<div class="ps-panel--sidebar" id="navigation-mobile">
    <div class="ps-panel__header">
        <h3>Categories</h3>
    </div>
    <div class="ps-panel__content">
        <div class="menu--product-categories">
            <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Department</span></div>
            <div class="menu__content">
                <ul class="menu--mobile">
                    <li><a href="index.html#.html">Hot Promotions</a>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="index.html#">Consumer Electronic</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Electronic<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li><a href="index.html#.html">Home Audio &amp; Theathers</a>
                                    </li>
                                    <li><a href="index.html#.html">TV &amp; Videos</a>
                                    </li>
                                    <li><a href="index.html#.html">Camera, Photos &amp; Videos</a>
                                    </li>
                                    <li><a href="index.html#.html">Cellphones &amp; Accessories</a>
                                    </li>
                                    <li><a href="index.html#.html">Headphones</a>
                                    </li>
                                    <li><a href="index.html#.html">Videosgames</a>
                                    </li>
                                    <li><a href="index.html#.html">Wireless Speakers</a>
                                    </li>
                                    <li><a href="index.html#.html">Office Electronic</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu__column">
                                <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li><a href="index.html#.html">Digital Cables</a>
                                    </li>
                                    <li><a href="index.html#.html">Audio &amp; Video Cables</a>
                                    </li>
                                    <li><a href="index.html#.html">Batteries</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="index.html#.html">Clothing &amp; Apparel</a>
                    </li>
                    <li><a href="index.html#.html">Home, Garden &amp; Kitchen</a>
                    </li>
                    <li><a href="index.html#.html">Health &amp; Beauty</a>
                    </li>
                    <li><a href="index.html#.html">Yewelry &amp; Watches</a>
                    </li>
                    <li class="menu-item-has-children has-mega-menu"><a href="index.html#">Computer &amp; Technology</a><span class="sub-toggle"></span>
                        <div class="mega-menu">
                            <div class="mega-menu__column">
                                <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                                <ul class="mega-menu__list">
                                    <li><a href="index.html#.html">Computer &amp; Tablets</a>
                                    </li>
                                    <li><a href="index.html#.html">Laptop</a>
                                    </li>
                                    <li><a href="index.html#.html">Monitors</a>
                                    </li>
                                    <li><a href="index.html#.html">Networking</a>
                                    </li>
                                    <li><a href="index.html#.html">Drive &amp; Storages</a>
                                    </li>
                                    <li><a href="index.html#.html">Computer Components</a>
                                    </li>
                                    <li><a href="index.html#.html">Security &amp; Protection</a>
                                    </li>
                                    <li><a href="index.html#.html">Gaming Laptop</a>
                                    </li>
                                    <li><a href="index.html#.html">Accessories</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="index.html#.html">Babies &amp; Moms</a>
                    </li>
                    <li><a href="index.html#.html">Sport &amp; Outdoor</a>
                    </li>
                    <li><a href="index.html#.html">Phones &amp; Accessories</a>
                    </li>
                    <li><a href="index.html#.html">Books &amp; Office</a>
                    </li>
                    <li><a href="index.html#.html">Cars &amp; Motocycles</a>
                    </li>
                    <li><a href="index.html#.html">Home Improments</a>
                    </li>
                    <li><a href="index.html#.html">Vouchers &amp; Services</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--+createMenu(product_categories, 'menu--mobile')-->
    </div>
</div>
<div class="navigation--list">
    <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="index.html#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="index.html#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="index.html#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="index.html#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
</div>
<div class="ps-panel--sidebar" id="search-sidebar">
    <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="index.html" method="get">
            <div class="form-group--nest">
                <input class="form-control" type="text" placeholder="Search something...">
                <button><i class="icon-magnifier"></i></button>
            </div>
        </form>
    </div>
    <div class="navigation__content"></div>
</div>
<div class="ps-panel--sidebar" id="menu-mobile">
    <div class="ps-panel__header">
        <h3>Menu</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">
            <li class="menu-item-has-children"><a href="http://nouthemes.net/html/martfury/index">Home</a><span class="sub-toggle"></span>
                <ul class="sub-menu">
                    <li><a href="index.html">Marketplace Full Width</a>
                    </li>
                    <li><a href="home-autopart.html">Home Auto Parts</a>
                    </li>
                    <li><a href="home-technology.html">Home Technology</a>
                    </li>
                    <li><a href="home-organic.html">Home Organic</a>
                    </li>
                    <li><a href="home-marketplace.html">Home Marketplace V1</a>
                    </li>
                    <li><a href="home-marketplace-2.html">Home Marketplace V2</a>
                    </li>
                    <li><a href="home-marketplace-3.html">Home Marketplace V3</a>
                    </li>
                    <li><a href="home-marketplace-4.html">Home Marketplace V4</a>
                    </li>
                    <li><a href="home-electronic.html">Home Electronic</a>
                    </li>
                    <li><a href="home-furniture.html">Home Furniture</a>
                    </li>
                    <li><a href="home-kid.html">Home Kids</a>
                    </li>
                    <li><a href="homepage-photo-and-video.html">Home photo and picture</a>
                    </li>
                    <li><a href="home-medical.html">Home Medical</a>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="http://nouthemes.net/html/martfury/shop-default">Shop</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="shop-default.html">Shop Default</a>
                            </li>
                            <li><a href="shop-default.html">Shop Fullwidth</a>
                            </li>
                            <li><a href="shop-categories.html">Shop Categories</a>
                            </li>
                            <li><a href="shop-sidebar.html">Shop Sidebar</a>
                            </li>
                            <li><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                            </li>
                            <li><a href="shop-carousel.html">Shop Carousel</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Product Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="product-default.html">Default</a>
                            </li>
                            <li><a href="product-extend.html">Extended</a>
                            </li>
                            <li><a href="product-full-content.html">Full Content</a>
                            </li>
                            <li><a href="product-box.html">Boxed</a>
                            </li>
                            <li><a href="product-sidebar.html">Sidebar</a>
                            </li>
                            <li><a href="product-default.html">Fullwidth</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Product Types<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="product-default.html">Simple</a>
                            </li>
                            <li><a href="product-default.html">Color Swatches</a>
                            </li>
                            <li><a href="product-image-swatches.html">Images Swatches</a>
                            </li>
                            <li><a href="product-countdown.html">Countdown</a>
                            </li>
                            <li><a href="product-multi-vendor.html">Multi-Vendor</a>
                            </li>
                            <li><a href="product-instagram.html">Instagram</a>
                            </li>
                            <li><a href="product-affiliate.html">Affiliate</a>
                            </li>
                            <li><a href="product-on-sale.html">On sale</a>
                            </li>
                            <li><a href="product-video.html">Video Featured</a>
                            </li>
                            <li><a href="product-groupped.html">Grouped</a>
                            </li>
                            <li><a href="product-out-stock.html">Out Of Stock</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Woo Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="shopping-cart.html">Shopping Cart</a>
                            </li>
                            <li><a href="checkout.html">Checkout</a>
                            </li>
                            <li><a href="whishlist.html">Whishlist</a>
                            </li>
                            <li><a href="compare.html">Compare</a>
                            </li>
                            <li><a href="order-tracking.html">Order Tracking</a>
                            </li>
                            <li><a href="my-account.html">My Account</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Basic Page<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="about-us.html">About Us</a>
                            </li>
                            <li><a href="contact-us.html">Contact</a>
                            </li>
                            <li><a href="faqs.html">Faqs</a>
                            </li>
                            <li><a href="comming-soon.html">Comming Soon</a>
                            </li>
                            <li><a href="404-page.html">404 Page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="become-a-vendor.html">Become a Vendor</a>
                            </li>
                            <li><a href="vendor-store.html">Vendor Store</a>
                            </li>
                            <li><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                            </li>
                            <li><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
                <div class="mega-menu">
                    <div class="mega-menu__column">
                        <h4>Blog Layout<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="blog-grid.html">Grid</a>
                            </li>
                            <li><a href="blog-list.html">Listing</a>
                            </li>
                            <li><a href="blog-small-thumb.html">Small Thumb</a>
                            </li>
                            <li><a href="blog-left-sidebar.html">Left Sidebar</a>
                            </li>
                            <li><a href="blog-right-sidebar.html">Right Sidebar</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mega-menu__column">
                        <h4>Single Blog<span class="sub-toggle"></span></h4>
                        <ul class="mega-menu__list">
                            <li><a href="blog-detail.html">Single 1</a>
                            </li>
                            <li><a href="blog-detail-2.html">Single 2</a>
                            </li>
                            <li><a href="blog-detail-3.html">Single 3</a>
                            </li>
                            <li><a href="blog-detail-4.html">Single 4</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div id="loader-wrapper">
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<div class="ps-search" id="site-search"><a class="ps-btn--close" href="index.html#"></a>
    <div class="ps-search__content">
        <form class="ps-form--primary-search" action="do_action" method="post">
            <input class="form-control" type="text" placeholder="Search for...">
            <button><i class="aroma-magnifying-glass"></i></button>
        </form>
    </div>
</div>
<div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
            <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                <div class="ps-product__header">
                    <div class="ps-product__thumbnail" data-vertical="false">
                        <div class="ps-product__images" data-arrow="true">
                            <div class="item"><img src="img/products/detail/fullwidth/1.jpg" alt=""></div>
                            <div class="item"><img src="img/products/detail/fullwidth/2.jpg" alt=""></div>
                            <div class="item"><img src="img/products/detail/fullwidth/3.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="ps-product__info">
                        <h1>Marshall Kilburn Portable Wireless Speaker</h1>
                        <div class="ps-product__meta">
                            <p>Brand:<a href="shop-default.html">Sony</a></p>
                            <div class="ps-product__rating">
                                <select class="ps-rating" data-read-only="true">
                                    <option value="1">1</option>
                                    <option value="1">2</option>
                                    <option value="1">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                </select><span>(1 review)</span>
                            </div>
                        </div>
                        <h4 class="ps-product__price">$36.78 ??? $56.99</h4>
                        <div class="ps-product__desc">
                            <p>Sold By:<a href="shop-default.html"><strong> Go Pro</strong></a></p>
                            <ul class="ps-list--dot">
                                <li> Unrestrained and portable active stereo speaker</li>
                                <li> Free from the confines of wires and chords</li>
                                <li> 20 hours of portable capabilities</li>
                                <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                <li> 3/4??? Dome Tweeters: 2X and 4??? Woofer: 1X</li>
                            </ul>
                        </div>
                        <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="index.html#">Add to cart</a><a class="ps-btn" href="index.html#">Buy Now</a>
                            <div class="ps-product__actions"><a href="index.html#"><i class="icon-heart"></i></a><a href="index.html#"><i class="icon-chart-bars"></i></a></div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@include('partials.frontend._footer-scripts')
</body>

</html>
