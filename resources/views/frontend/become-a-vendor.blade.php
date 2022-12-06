@extends('layouts.frontend-layout')

@section('extra-styles')

@endsection

@section('title')
    Become A Vendor
@endsection

@section('main-content')
    <div class="ps-page--single">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{route('homepage')}}">Home</a></li>
                    <li>Become a Vendor</li>
                </ul>
            </div>
        </div>
        <div class="ps-vendor-banner bg--cover" data-background="/img/bg/vendor.jpg">
            <div class="container">
                <h2>Millions Of Shoppers Can’t Wait To See What You Have In Store</h2>
                <a class="ps-btn ps-btn--lg" href="#become-a-vendor">Start Selling</a>
            </div>
        </div>
        <div class="ps-section--vendor ps-vendor-best-fees" id="become-a-vendor">
            <div class="container">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {!! session()->get('success') !!}
                </div>
                @endif
                <div class="ps-section__header">
                    <p>Become A Vendor</p>
                    <h4>Easy, transparent, and secure</h4>
                </div>

                <form autocomplete="off" class="ps-form--contact-us" action="{{route('become-a-vendor')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="firstName" value="{{old('firstName')}}" placeholder="First Name*">
                                @error('firstName') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="">Last Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="lastName" value="{{old('lastName')}}" placeholder="Last Name*">
                                @error('lastName') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="">Email Address<span class="text-danger">*</span></label>
                                <input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="Email Address*">
                                @error('email') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="">Mobile No. <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="mobileNo" value="{{old('mobileNo')}}" placeholder="Mobile No*">
                                @error('mobileNo') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="">Choose Password <span class="text-danger">*</span></label>
                                <input class="form-control" type="password" name="password" value="{{old('password')}}" placeholder="Choose Password*">
                                @error('password') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                            <div class="form-group">
                                <label for="">Store Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="storeName" value="{{old('storeName')}}" placeholder="Store Name*">
                                @error('storeName') <i class="text-danger">{{$message}}</i> @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group submit">
                        <button type="submit" class="ps-btn">Become A Vendor</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="ps-section--vendor ps-vendor-about">
            <div class="container">
                <div class="ps-section__header">
                    <p>WHY SELL ON {{env('APP_NAME')}}</p>
                    <h4>Join a marketplace where nearly 50 million buyers around <br> the world shop for unique items</h4>
                </div>
                <div class="ps-section__content">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--icon-box-2">
                                <div class="ps-block__thumbnail"><img src="/img/icons/vendor-1.png" alt=""></div>
                                <div class="ps-block__content">
                                    <h4>Low Fees</h4>
                                    <div class="ps-block__desc" data-mh="about-desc">
                                        <p>It doesn’t take much to list your items and once you make a sale,
                                            {{env('APP_NAME')}}’s transaction fee is just 2.5%.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--icon-box-2">
                                <div class="ps-block__thumbnail"><img src="img/icons/vendor-2.png" alt=""></div>
                                <div class="ps-block__content">
                                    <h4>Powerful Tools</h4>
                                    <div class="ps-block__desc" data-mh="about-desc">
                                        <p>Our tools and services make it easy to manage, promote and grow your business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block--icon-box-2">
                                <div class="ps-block__thumbnail"><img src="img/icons/vendor-3.png" alt=""></div>
                                <div class="ps-block__content">
                                    <h4>Support 24/7</h4>
                                    <div class="ps-block__desc" data-mh="about-desc">
                                        <p>Our tools and services make it easy to manage, promote and grow your business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-section--vendor ps-vendor-milestone">
            <div class="container">
                <div class="ps-section__header">
                    <p>How it works</p>
                    <h4>Easy to start selling online on {{env('APP_NAME')}} just 4 simple steps</h4>
                </div>
                <div class="ps-section__content">
                    <div class="ps-block--vendor-milestone">
                        <div class="ps-block__left">
                            <h4>Register and list your products</h4>
                            <ul>
                                <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                                <li>Our {{env('APP_NAME')}} Advisors will help you at every step and fully assist you in taking your business online</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-1.png" alt=""></div>
                        <div class="ps-block__number"><span>1</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone reverse">
                        <div class="ps-block__left">
                            <h4>Receive orders and sell your product</h4>
                            <ul>
                                <li>Get orders from customers.</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-2.png" alt=""></div>
                        <div class="ps-block__number"><span>2</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone">
                        <div class="ps-block__left">
                            <h4>Package and ship with ease</h4>
                            <ul>
                                <li>Package items and ship them over to your customers.</li>
                                <li>Maintain a log of all your orders. Generate report</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-3.png" alt=""></div>
                        <div class="ps-block__number"><span>3</span></div>
                    </div>
                    <div class="ps-block--vendor-milestone reverse">
                        <div class="ps-block__left">
                            <h4>Cash Out</h4>
                            <ul>
                                <li>Our remittance system is seamless</li>
                            </ul>
                        </div>
                        <div class="ps-block__right"><img src="img/vendor/milestone-4.png" alt=""></div>
                        <div class="ps-block__number"><span>4</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('extra-scripts')

@endsection
