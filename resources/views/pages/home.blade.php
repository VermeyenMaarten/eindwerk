@extends('layouts.default')
@section('content')

    <div class="container">

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert" >
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if(Session::has('checkout-success'))
                <div class="alert alert-success" role="alert" >
                    <strong>{{ Session::get('checkout-success') }}</strong>
                </div>
            @endif

        <div class="row carousel-holder slider">

            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="{{ url('images/banner1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="{{ url('images/banner3.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="{{ url('images/banner2.jpg') }}" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">

                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">

                    </a>
                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-sm-4 home-features">
                    <img src="{{url('/images/tag.png')}}" />
                    <h4>The Lowest Prices</h4>
                    <p>We don't have short term sales where only a few people get the best deals.
                        Our low prices are the same everyday! You will not find a lower total price anywhere.
                    </p>
                </div>
                <div class="col-sm-4 home-features">
                    <img src="{{url('/images/medal.png')}}" />
                    <h4>High Quality Products</h4>
                    <p>We sell the most popular brands and carry nearly all of their product line.
                        We give you the best total selection of the products that actually work!
                    </p>
                </div>
                <div class="col-sm-4 home-features">
                    <img src="{{url('/images/startup.png')}}" />
                    <h4>Fast Shipping</h4>
                    <p> We want you to receive your product as soon as possible.
                        We guarantee your order will be sent within one business day!
                    </p>
                </div>
            </div>

<h2 class="featured-products"> Featured Products </h2>

        @foreach($products->chunk(4) as $productChunk)
            <div class="row">
                @foreach($productChunk as $product)
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src={{$product->imagePath}} alt="...">
                            <div class="caption">
                                <a href="{{ route('product.single', ['id' => $product->id]) }}">
                                <h3> {{$product->title}} </h3>
                                <p class="discription"> {{$product->discription}} </p>
                                <div class="clearfix">
                                    <div class="pull-left price">$ {{$product->price}}</div>
                                    <a href={{ route('product.addToCart', ['id' => $product->id ]) }} class="btn
                                       btn-danger pull-right" role="button">Add to cart</a>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
            @endforeach
                </div>
            @endforeach
            <!-- /.container -->
            </div>

@stop