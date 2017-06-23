@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <table style="width:100%" class="table-responsive admin-table">
                    <tr>
                        <td>
                            <h2> Orders </h2>
                        </td>
                    </tr>
                </table>
                <hr>
                <table style="width:100%" class="table-responsive table-striped table-bordered orders-table">
                    <tr>
                        <th>Products</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Zip</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                    @foreach ($orders as $order)

                        <tr>
                            <td>
                                <div>
                                    <?php $data = json_decode($order->cart, true); ?>
                                        @foreach ($data['items'] as $item)
                                            {{ $item['item']['title'] }} <?php echo "  -  $" ?> {{ $item['item']['price'] }} <br>
                                        @endforeach
                                </div>
                            </td>
                            <td>
                                <div>{{ $order->name }}</div>
                            </td>
                            <td>
                                <div>{{ $order->address }}</div>
                            </td>
                            <td>
                                <div>{{ $order->postal_code }}</div>
                            </td>
                            <td>
                                <div>{{ $order->city }}</div>
                            </td>
                            <td>
                                <div>{{ $order->country }}</div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
