@extends('layouts.default')

@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src= {{$product->imagePath}} alt="...">
                </div>
        </div>

        <div class="col-sm-6 col-md-4" style="background-color:#f0f0f0;padding:20px;">
            <div class="caption">
                <h3> {{$product->title}} </h3>

                <p class="discription"> {{$product->discription}} </p>
                <div class="clearfix">
                    <div class="pull-left price"/><h3>$ {{$product->price}}</h3></div>

                <a href= {{ route('product.addToCart', ['id' => $product->id ]) }} class="btn btn-danger" role="button" style="width:100%">Add to cart</a>
                </div>
            </div>
        </div>
    </div>

@stop
