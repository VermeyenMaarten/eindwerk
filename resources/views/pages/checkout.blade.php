@extends('layouts.default')
@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout <p class="fa fa-cc-visa"></p> <p class="fa fa-cc-mastercard"></p>
                <p class="fa fa-cc-amex"></p> <p class="fa fa-cc-discover"></p> <p class="fa fa-cc-jcb"></p> </h1>
            <hr>

            <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ' ' }}" >
                {{ Session::get('error') }}
            </div>

            <form action="{{ route('checkout') }}" method="post" id="checkout-form" name="stripeToken">
                {{ csrf_field() }}

                <h3 style="color:dodgerblue">Shipping Information</h3>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control input-lg" id="name" data-stripe="name" type="text" placeholder="Enter Name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control input-lg" id="street_name" data-stripe="name" type="text" placeholder="Street Name and number" name="address" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="form-group">
                            <label>Postal Code</label>
                            <input class="form-control input-lg" id="postal_code" type="tel" size="2" placeholder="1000" name="zip" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City</label>
                            <input class="form-control input-lg" id="city" data-stripe="city" type="text" placeholder="Brussels" name="city" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country</label>
                            <input class="form-control input-lg" id="country" data-stripe="country" type="text" placeholder="Belgium" name="country" required>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h3 style="color:dodgerblue">Billing Information</h3>
                        <hr>
                        <div class="form-group">
                            <label>Card Holder Name</label>
                            <input class="form-control input-lg" id="card_holder_name" data-stripe="name" type="text" placeholder="Name of the Card Holder"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Credit Card Number</label>
                            <input class="form-control input-lg" id="number" type="tel" size="20" data-stripe="number" placeholder="4242 4242 4242 4242" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="form-group">
                            <label>Exp Month</label>
                            <input class="form-control input-lg" id="exp_month" type="tel" size="2" data-stripe="exp-month" placeholder="01" required>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4">
                        <div class="form-group">
                            <label>Exp Year</label>
                            <input class="form-control input-lg" id="exp_year" type="tel" size="4" data-stripe="exp-year" placeholder="2020" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3 col-xs-4">
                        <div class="form-group pull-right">
                            <label>CVC</label>
                            <input class="form-control input-lg" id="cvc" type="tel" size="4" data-stripe="cvc" placeholder="555" required>
                        </div>
                    </div>
                </div>
                <h3>Your Total :  <strong> ${{ $total }} </strong> </h3>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-lg btn-block btn-success submit" type="submit">Buy now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection