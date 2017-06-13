@extends('layouts.default-no-footer')
@section('content')

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item" style="height:55px;">
                            <form action='{{ route('product.remove', $product['id']) }}' method="post">
                                <input type="hidden" name="_method" value="DELETE" />
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <input style="float:right;margin-top:-2px;margin-left:5px;" type="image" src="{{ url('images/delete.png') }}" alt="submit" />
                            </form>

                            <span class="badge">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success"> ${{ $product['price'] }}</span>
                        </li>

                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: ${{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
@endsection