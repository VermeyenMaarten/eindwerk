@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">

                            <div class="panel-body admin-table">
                                <div class="col-lg-4">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <i class="fa fa-gift fa-5x"></i>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <p class="announcement-heading"> {{ App\Product::count() }}</p>
                                                    <p class="announcement-text"> Products</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href={{ route('admin.products') }}>
                                            <div class="panel-footer announcement-bottom">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        View Products
                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <i class="fa fa-credit-card fa-5x"></i>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <p class="announcement-heading">{{ App\Order::count() }}</p>
                                                    <p class="announcement-text"> Orders</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ route('admin.orders') }}">
                                            <div class="panel-footer announcement-bottom">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        View Orders
                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <i class="fa fa-users fa-5x"></i>
                                                </div>
                                                <div class="col-xs-6 text-right">
                                                    <p class="announcement-heading">18</p>
                                                    <p class="announcement-text">Subscribers</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                            <div class="panel-footer announcement-bottom">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        Subscribers
                                                    </div>
                                                    <div class="col-xs-6 text-right">
                                                        <i class="fa fa-arrow-circle-right"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- /.row -->
                        </div>
                    </div>
    </div>
@endsection
