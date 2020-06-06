@extends('layout')


@section('content')

    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text text-center w-100">
                        <h1 class="mb-4">Find Properties <br>That Make You Money</h1>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Search Properties</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mouse">
            <a href="#" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
    </div>


    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate">
                        <form action="#" class="search-property-1">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Location</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="ion-ios-search"></span></div>
                                            <input type="text" class="form-control" placeholder="City/Locality Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Property Type</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Type</option>
                                                    <option value="">Commercial</option>
                                                    <option value="">- Office</option>
                                                    <option value="">Residential</option>
                                                    <option value="">Villa</option>
                                                    <option value="">Condominium</option>
                                                    <option value="">Apartment</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Property Status</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Type</option>
                                                    <option value="">Rent</option>
                                                    <option value="">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Price Limit</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">$5,000</option>
                                                    <option value="">$10,000</option>
                                                    <option value="">$50,000</option>
                                                    <option value="">$100,000</option>
                                                    <option value="">$200,000</option>
                                                    <option value="">$300,000</option>
                                                    <option value="">$400,000</option>
                                                    <option value="">$500,000</option>
                                                    <option value="">$600,000</option>
                                                    <option value="">$700,000</option>
                                                    <option value="">$800,000</option>
                                                    <option value="">$900,000</option>
                                                    <option value="">$1,000,000</option>
                                                    <option value="">$2,000,000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search Property" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section goto-here">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Exclusive Offer For You</h2>
                </div>
            </div>
            <div class="row">
                @foreach($listings as $listing)
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center" style="background-image: url({{$listing -> main_image_url }});">
                            <a href="/properties/{{$listing->id}}" class="icon d-flex align-items-center justify-content-center btn-custom">
                                <span class="ion-ios-link"></span>
                            </a>
                            <div class="list-agent d-flex align-items-center">
                                <a href="#" class="agent-info d-flex align-items-center">
                                    <div class="img-2 rounded-circle" style="background-image: url(/images/person_1.jpg);"></div>
                                    <h3 class="mb-0 ml-2">Ben Ford</h3>
                                </a>
                                <div class="tooltip-wrap d-flex">
                                    <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
                                        <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                    </a>
                                    <a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
                                        <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="text">
                            <p class="price mb-3"><span class="old-price">${{number_format($listing -> price)}}</span><span class="orig-price">${{number_format($listing -> price_per_month)}}<small>/mo</small></span></p>
                            <h3 class="mb-0"><a href="properties-single.html">{{$listing -> title}}</a></h3>
                            <span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i>{{$listing -> address}}</span>
                            <ul class="property_list">
                                <li><span class="flaticon-bed"></span>{{$listing -> num_bed}}</li>
                                <li><span class="flaticon-bathtub"></span>{{$listing -> num_bath}}</li>
                                <li><span class="flaticon-floor-plan"></span>{{$listing -> sqrt}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section class="ftco-section ftco-fullwidth">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Services</span>
                    <h2 class="mb-2">Why Choose Us?</h2>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row d-md-flex text-wrapper align-items-stretch">
                <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('images/about.jpg');"></div>
                <div class="one-half half-text d-flex justify-content-end align-items-center">
                    <div class="text-inner pl-md-5">
                        <div class="row d-flex">
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
                                    <div class="media-body pl-4">
                                        <h3>No Downpayment</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
                                    <div class="media-body pl-4">
                                        <h3>All Cash Offer</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
                                    <div class="media-body pl-4">
                                        <h3>Experts in Your Corner</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-self-stretch ftco-animate">
                                <div class="media block-6 services-wrap d-flex">
                                    <div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
                                    <div class="media-body pl-4">
                                        <h3>Locked in Pricing</h3>
                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section img" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="305">0</strong>
                            <span>Area <br>Population</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="1090">0</strong>
                            <span>Total <br>Properties</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="209">0</strong>
                            <span>Average <br>House</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="67">0</strong>
                            <span>Total <br>Branches</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Find Properties</span>
                    <h2 class="mb-2">Find Properties In Your City</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-1.jpg);">
                        <div class="location">
                            <span class="rounded">New York, USA</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">100 Property Listing</a></h3>
                            <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-2.jpg);">
                        <div class="location">
                            <span class="rounded">New York, USA</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">100 Property Listing</a></h3>
                            <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-3.jpg);">
                        <div class="location">
                            <span class="rounded">New York, USA</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">100 Property Listing</a></h3>
                            <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-4.jpg);">
                        <div class="location">
                            <span class="rounded">New York, USA</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">100 Property Listing</a></h3>
                            <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-5.jpg);">
                        <div class="location">
                            <span class="rounded">New York, USA</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">100 Property Listing</a></h3>
                            <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-6.jpg);">
                        <div class="location">
                            <span class="rounded">New York, USA</span>
                        </div>
                        <div class="text">
                            <h3><a href="#">100 Property Listing</a></h3>
                            <a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap py-4">
                                <div class="text">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <div class="d-flex align-items-center">
                                        <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                        <div class="pl-3">
                                            <p class="name">Roger Scott</p>
                                            <span class="position">Marketing Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-agent">
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Agents</span>
                    <h2 class="mb-4">Our Agents</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Ben Ford</a></h3>
                            <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">43 Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">John Cooper</a></h3>
                            <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">28 Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Janice Clinton</a></h3>
                            <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">30 Properties</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="agent">
                        <div class="img">
                            <img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
                        </div>
                        <div class="desc">
                            <h3><a href="properties.html">Eunice Henceford</a></h3>
                            <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">25 Properties</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
                            </a>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">October 17, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
                            </a>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">October 17, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
                            </a>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">October 17, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
                            </a>
                            <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">October 17, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
