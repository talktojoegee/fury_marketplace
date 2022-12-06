@extends('layouts.frontend-layout')

@section('extra-styles')

@endsection

@section('title')
    {{$store->store_name ?? '' }}
@endsection

@section('main-content')
    <div class="ps-page--single">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li>Vendor Store</li>
                </ul>
            </div>
        </div>
        <div class="ps-vendor-store">
            <div class="container">
                <div class="ps-section__container">
                    <div class="ps-section__left">
                        <div class="ps-block--vendor">
                            <div class="ps-block__thumbnail">
                                <img src="/assets/drive/logo/{{$store->logo ?? 'logo.png' }}" alt="">
                            </div>
                            <div class="ps-block__container">
                                <div class="ps-block__header">
                                    <h4>{{$store->store_name ?? '' }}</h4>
                                </div><span class="ps-block__divider"></span>
                                <div class="ps-block__content">
                                    <p>{{$store->about ?? '' }}</p>
                                    <span class="ps-block__divider"></span>
                                    <p><strong>Address: </strong> {{$store->about ?? '' }}</p>
                                    <figure>
                                        <figcaption>Follow us on social</figcaption>
                                        <ul class="ps-list--social-color">
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a class="feed" href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </figure>
                                </div>
                                <div class="ps-block__footer">
                                    <p>Call us directly<strong>{{$store->mobile_no ?? '' }}</strong></p>
                                    <p>or Or if you have any question</p><a class="ps-btn ps-btn--fullwidth" href="mailto:{{$store->email ?? '' }}">Contact Vendor</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-section__right">
                        <div class="ps-shopping ps-tab-root">
                            <div class="ps-shopping__header">

                                <p><strong> {{number_format($products->count())}}</strong> Products</p>
                                <div class="ps-shopping__actions">
                                    <select class="ps-select" data-placeholder="Sort Items">
                                        <option>Sort by latest</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by price: low to high</option>
                                        <option>Sort by price: high to low</option>
                                    </select>
                                    <div class="ps-shopping__view">
                                        <p>View</p>
                                        <ul class="ps-tab-list">
                                            <li class="active"><a href="vendor-store.html#tab-1"><i class="icon-grid"></i></a></li>
                                            <li><a href="vendor-store.html#tab-2"><i class="icon-list4"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="row">
                                        @forelse($products as $product)
                                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                            <div class="ps-product">
                                                <div class="ps-product__thumbnail">
                                                    <a href="{{route('show-product-details', $product->slug)}}">
                                                        <img src="/storage/{{$product->getFeaturedProductImage($product->id)->attachment ?? '' }}" alt="{{$product->name ?? '' }}">
                                                    </a>
                                                    <ul class="ps-product__actions">
                                                        <li><a href="{{route('show-product-details', $product->slug)}}" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                                        <li><a href="{{route('show-product-details', $product->slug)}}" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ps-product__container">
                                                    <p class="ps-product__price sale">{{env("APP_CURRENCY")}}{{number_format($product->normal_price)}} <del>{{env("APP_CURRENCY")}}{{number_format($product->normal_price)}} </del>
                                                    </p>
                                                    <div class="ps-product__content">
                                                        <a class="ps-product__title" href="{{route('show-product-details', $product->slug)}}">{{$product->name ?? '' }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <p class="text-center">This store currently has no product...</p>
                                            </div>
                                        @endforelse
                                    </div>

                                </div>
                                <div class="ps-tab" id="tab-2">
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/1.jpg" alt="" /></a>
                                            <div class="ps-product__badge">11%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone X 256GB T-Mobile – Black</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#"></a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}1389.99 <del>{{env("APP_CURRENCY")}}1893.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/2.jpg" alt="" /></a>
                                            <div class="ps-product__badge">11%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone 7 Plus 128 GB – Red Color</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}820.99 <del>{{env("APP_CURRENCY")}}893.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/3.jpg" alt="" /></a>
                                            <div class="ps-product__badge">21%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple MacBook Air Retina 13.3-Inch Laptop</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}1020.99 <del>{{env("APP_CURRENCY")}}1120.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/4.jpg" alt="" /></a>
                                            <div class="ps-product__badge">18%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}64.99 <del>{{env("APP_CURRENCY")}}80.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/5.jpg" alt="" /></a>
                                            <div class="ps-product__badge">18%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Bose Bluetooth &amp; Wireless Speaker 2.0 – Blue</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}42.99 <del>{{env("APP_CURRENCY")}}52.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/6.jpg" alt="" /></a>
                                            <div class="ps-product__badge">17%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}542.99 <del>{{env("APP_CURRENCY")}}592.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product ps-product--wide">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/technology/7.jpg" alt="" /></a>
                                            <div class="ps-product__badge">17%</div>
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gallaxy A8 8GB Ram – Sliver Version</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select><span>01</span>
                                                </div>
                                                <p class="ps-product__vendor">Sold by:<a href="vendor-store.html#">Global Office</a></p>
                                                <ul class="ps-product__desc">
                                                    <li> Unrestrained and portable active stereo speaker</li>
                                                    <li> Free from the confines of wires and chords</li>
                                                    <li> 20 hours of portable capabilities</li>
                                                    <li> Double-ended Coil Cord with 3.5mm Stereo Plugs Included</li>
                                                    <li> 3/4″ Dome Tweeters: 2X and 4″ Woofer: 1X</li>
                                                </ul>
                                            </div>
                                            <div class="ps-product__shopping">
                                                <p class="ps-product__price sale">{{env("APP_CURRENCY")}}542.99 <del>{{env("APP_CURRENCY")}}592.00</del></p><a class="ps-btn" href="vendor-store.html#">Add to cart</a>
                                                <ul class="ps-product__actions">
                                                    <li><a href="vendor-store.html#"><i class="icon-heart"></i> Wishlist</a></li>
                                                    <li><a href="vendor-store.html#"><i class="icon-chart-bars"></i> Compare</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-pagination">
                                        <ul class="pagination">
                                            <li class="active"><a href="vendor-store.html#">1</a></li>
                                            <li><a href="vendor-store.html#">2</a></li>
                                            <li><a href="vendor-store.html#">3</a></li>
                                            <li><a href="vendor-store.html#">Next Page<i class="icon-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-scripts')

@endsection
