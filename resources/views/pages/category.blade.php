@extends('layouts.default')
@section('content')

    @foreach($products->chunk(4) as $productChunk)
        <div class="row product-style">
            @foreach($productChunk as $product)
                <div class="col-sm-9 col-md-3">
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


@endsection