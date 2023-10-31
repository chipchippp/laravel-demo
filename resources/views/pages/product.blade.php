@extends("layouts.app")
@section("main")
    <div class="container">
        @if(session()->has("success"))
            <div class="alert alert-success" role="alert">
                {{session("success")}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large"
                             src="{{$product->thumbnail}}" alt="">
                    </div>
                    <div class="product__details__pic__slider owl-carousel">
                        <img data-imgbigurl="img/product/details/product-details-2.jpg"
                             src="img/product/details/thumb-1.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-3.jpg"
                             src="img/product/details/thumb-2.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-5.jpg"
                             src="img/product/details/thumb-3.jpg" alt="">
                        <img data-imgbigurl="img/product/details/product-details-4.jpg"
                             src="img/product/details/thumb-4.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <form action="{{url("/add-to-cart",["product"=>$product->id])}}" method="get">
                    <div class="product__details__text">
                        <h3>{{$product->name}}</h3>
                        <h5>Category: {{$product->Category->name}}</h5>
                        <p>Qty: {{$product->qty}}</p>
                        <p>Đã bán: {{$product->Orders->count()}}</p>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">${{$product->price}}</div>
                        <p>{{$product->description}}</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input name="buy_qty" type="text" value="1">
                                </div>
                            </div>
                        </div>
                        @if($product->qty > 0)
                            <button type="submit" class="primary-btn btn">ADD TO CART</button>
                        @endif
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b>
                                @if($product->qty > 0)
                                    <span class="text-success">In Stock</span>
                                @else
                                    <span class="text-danger">Out of Stock</span>
                                @endif
                            </li>
                            <li><b>Shipping</b> <span>01 day shipping. <samp>Free pickup today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                               aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                               aria-selected="false">Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                               aria-selected="false">Reviews <span>(1)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Description</h6>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Infomation</h6>
                                <p>{{$product->description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row total_rate">
                                            <div class="col-6">
                                                <div class="box_total">
                                                    <h5>Overall</h5>
                                                    <h4>4.0</h4>
                                                    <h6>(03 Reviews)</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review_list">
                                            <div class="review_item">
                                                <div class="media">
                                                    <div class="media-body">
                                                        <h4>Blake Ruiz</h4>
{{--                                                        <i class="fa fa-star"></i>--}}
                                                    </div>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="review_box">
                                            <h4>Add a Review</h4>
                                            <hr>
                                            <form class="row contact_form" action="{{url("/detail/{product:slug}")}}" method="post" id="contactForm" novalidate="novalidate">
                                                @csrf
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{old("name")}}" id="name" name="name" placeholder="Your Full name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" value="{{old("email")}}" id="email" name="email" placeholder="Email Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" value="{{old("tel")}}" id="number" name="number" placeholder="Phone Number" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" id="message" rows="1" placeholder="Review" ></textarea>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-md-12 text-right">
                                                    <hr>
                                                    {{--                                        rating--}}

                                                    <div class="rate"></div>
                                                    <form action="{{url("/detail")}}" method="POST" class="form-inline" id="formRating">
                                                        <div class="form-group row">
                                                            <input type="hidden" class="form-control" name="rating_start" id="rating_start">
                                                            <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">
                                                        </div>
                                                    </form>
                                                    <button type="submit" value="submit" class="site-btn">Submit Now</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <section class="related-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related__product__title">
                        <h2>Related Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($relateds as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{$item->thumbnail}}">
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="{{url("detail",["product"=>$item->slug])}}">{{$item->name}}</a></h6>
                                <h5>${{$item->price}}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@stop()
@section("before_css")
    <style>
        .rate{
            color: #fbd600;
            font-size: 30px;
        }
        #rating_start, #product_id{
            height: 40px;
            width: 60px;
        }
        .rate-base-layer
        {
            color: #aaa;
        }
        .rate-hover-layer
        {
            color: orange;
        }

        .rate-base-layer span, .rate-base-layer span
        {
            opacity: 0.5;
        }
        hr
        {
            border: 1px solid #ccc;
        }
    </style>
@stop()
@section("before_js")
    {{--rating--}}
    <script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
    <script>
        $(document).ready(function(){
            var options = {
                max_value: 5,
                step_size: 1,
                initial_value: 3,
            }
            $(".rate").rate(options).on("click", function() {
                var ratingValue = $(this).rate("getValue");  // Get the clicked rating value
                $("#rating_start").val(ratingValue);  // Update the input value
            });

        });
    </script>
@endsection
