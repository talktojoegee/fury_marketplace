@extends('layouts.frontend-layout')

@section('extra-styles')

@endsection

@section('title')
    {{$product->name ?? '' }}
@endsection

@section('main-content')
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="#">{{$product->getProductCategory->name ?? '' }}</a></li>
                <li>{{$product->name ?? '' }}</li>
            </ul>
        </div>
    </div>
    <div class="ps-page--product">
        <div class="ps-container">
            <div class="ps-page__container">
                <div class="ps-page__left">
                    <div class="ps-product--detail ps-product--fullwidth">
                        <div class="ps-product__header">
                            <div class="ps-product__thumbnail" data-vertical="true">
                                <figure>
                                    <div class="ps-wrapper">
                                        <div class="ps-product__gallery" data-arrow="true">
                                            @foreach($product->getProductGallery as $gallery)
                                                <div class="item"><a href="/storage/{{$gallery->attachment ?? '' }}"><img src="/storage/{{$gallery->attachment ?? '' }}" alt="{{$product->name ?? '' }}"></a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </figure>
                                <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                                    @foreach($product->getProductGallery as $gallery)
                                    <div class="item">
                                        <img src="/storage/{{$gallery->attachment ?? '' }}" alt="{{$product->name ?? '' }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="ps-product__info">
                                <h1>{{$product->name ?? '' }}</h1>
                                <div class="ps-product__meta">
                                    <p>Brand:<a href="#">{{$product->getProductBrand->name ?? '' }}</a></p>
                                </div>
                                <h4 class="ps-product__price">{{env('APP_CURRENCY')}}{{number_format($product->active_price,2)}}</h4>
                                <div class="ps-product__desc">
                                    <p>Sold By:<a href="{{route('store-details', $product->getProductVendor->slug)}}"><strong> {{$product->getProductVendor->store_name ?? '' }}</strong></a></p>
                                </div>
                                <div class="ps-product__variations">
                                    <figure>
                                        <figcaption>Color</figcaption>
                                        <div class="ps-variant ps-variant--color color--1"><span class="ps-variant__tooltip">Black</span></div>
                                        <div class="ps-variant ps-variant--color color--2"><span class="ps-variant__tooltip"> Gray</span></div>
                                    </figure>
                                </div>
                                <div class="ps-product__shopping">
                                    <figure>
                                        <figcaption>Quantity</figcaption>
                                        <div class="form-group--number">
                                            <button class="up"><i class="fa fa-plus"></i></button>
                                            <button class="down"><i class="fa fa-minus"></i></button>
                                            <input class="form-control" type="text" placeholder="1">
                                        </div>
                                    </figure><a class="ps-btn ps-btn--black" href="product-default.html#">Add to cart</a><a class="ps-btn" href="product-default.html#">Buy Now</a>
                                    <div class="ps-product__actions"><a href="product-default.html#"><i class="icon-heart"></i></a><a href="product-default.html#"><i class="icon-chart-bars"></i></a></div>
                                </div>
                                <div class="ps-product__specification"><a class="report" href="product-default.html#">Report Abuse</a>
                                    <p><strong>SKU:</strong> SF1133569600-1</p>
                                    <p class="categories"><strong> Categories:</strong><a href="product-default.html#">Consumer Electronics</a>,<a href="product-default.html#"> Refrigerator</a>,<a href="product-default.html#">Babies & Moms</a></p>
                                    <p class="tags"><strong> Tags</strong><a href="product-default.html#">sofa</a>,<a href="product-default.html#">technologies</a>,<a href="product-default.html#">wireless</a></p>
                                </div>
                                <div class="ps-product__sharing"><a class="facebook" href="product-default.html#"><i class="fa fa-facebook"></i></a><a class="twitter" href="product-default.html#"><i class="fa fa-twitter"></i></a><a class="google" href="product-default.html#"><i class="fa fa-google-plus"></i></a><a class="linkedin" href="product-default.html#"><i class="fa fa-linkedin"></i></a><a class="instagram" href="product-default.html#"><i class="fa fa-instagram"></i></a></div>
                            </div>
                        </div>
                        <div class="ps-product__content ps-tab-root">
                            <ul class="ps-tab-list">
                                <li class="active"><a href="product-default.html#tab-1">Description</a></li>
                            </ul>
                            <div class="ps-tabs">
                                <div class="ps-tab active" id="tab-1">
                                    <div class="ps-document">
                                       {!! $product->description ?? ''  !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-page__right">
                    <aside class="widget widget_product widget_features">
                        <p><i class="icon-network"></i> Shipping worldwide</p>
                        <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
                        <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
                        <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
                    </aside>
                    <aside class="widget widget_sell-on-site">
                        <p><i class="icon-store"></i> Sell on {{env('APP_NAME')}}?<a href="{{route('become-a-vendor')}}"> Register Now !</a></p>
                    </aside>
                    <aside class="widget widget_ads"><a href="product-default.html#"><img src="img/ads/product-ads.png" alt=""></a></aside>
                    <aside class="widget widget_same-brand">
                        <h3>Same Brand</h3>
                        <div class="widget__content">
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt="" /></a>
                                    <div class="ps-product__badge">-37%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="product-default.html#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="product-default.html#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="product-default.html#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-default.html#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="product-default.html#">Robert's Store</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                        <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                                    </div>
                                </div>
                            </div>
                            <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt="" /></a>
                                    <div class="ps-product__badge">-5%</div>
                                    <ul class="ps-product__actions">
                                        <li><a href="product-default.html#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                        <li><a href="product-default.html#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                        <li><a href="product-default.html#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                        <li><a href="product-default.html#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                                    </ul>
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="product-default.html#">Youngshop</a>
                                    <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                                <option value="1">1</option>
                                                <option value="1">2</option>
                                                <option value="1">3</option>
                                                <option value="1">4</option>
                                                <option value="2">5</option>
                                            </select><span>01</span>
                                        </div>
                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                    </div>
                                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                        <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-scripts')

@endsection
