@extends('layouts.frontend-layout')

@section('extra-styles')

@endsection

@section('title')
    Stores
@endsection

@section('main-content')

    <div class="ps-page--single ps-page--vendor">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li>Stores</li>
                </ul>
            </div>
        </div>
        <section class="ps-store-list">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Stores</h3>
                </div>
                <div class="ps-section__wrapper">
                    <div class="ps-section__left">
                        <aside class="widget widget--vendor">
                            <h3 class="widget-title">Search</h3>
                            <input class="form-control" type="text" placeholder="Search...">
                        </aside>
                    </div>
                    <div class="ps-section__right">
                        <section class="ps-store-box">
                            <div class="ps-section__content">
                                <div class="row">
                                    @foreach($stores as $store)
                                         <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                        <article class="ps-block--store">
                                            <div class="ps-block__thumbnail bg--cover" data-background="img/vendor/store/1.jpg"></div>
                                            <div class="ps-block__content">
                                                <div class="ps-block__author">
                                                    <a class="ps-block__user" href="store-list.html#">
                                                        <img src="/assets/drive/logo/{{$store->logo ?? 'logo.png' }}" alt="{{$store->store_name ?? '' }}"></a>
                                                    <a class="ps-btn" href="{{route('store-details', ['slug'=>$store->slug])}}">Visit Store</a>
                                                </div>
                                                <h4>{{$store->store_name ?? '' }}</h4>
                                                <p>{{$store->address ?? 'N/A' }}</p>
                                                <ul class="ps-block__contact">
                                                    <li><i class="icon-envelope"></i>
                                                        <a href="#">
                                                            <span class="__cf_email__">{{$store->email ?? '' }}</span></a></li>
                                                    <li><i class="icon-telephone"></i> {{$store->mobile_no ?? '' }}</li>
                                                </ul>
                                                <div class="ps-block__inquiry">
                                                    <a href="mailto:{{$store->email}}">
                                                        <i class="icon-question-circle"></i> inquiry</a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="ps-newsletter">
        <div class="container">
            <form class="ps-form--newsletter" action="do_action" method="post">
                <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__left">
                            <h3>Newsletter</h3>
                            <p>Subcribe to get information about products and coupons</p>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-form__right">
                            <div class="form-group--nest">
                                <input class="form-control" type="email" placeholder="Email address">
                                <button class="ps-btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('extra-scripts')

@endsection
