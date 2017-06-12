@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <table style="width:100%" class="table-responsive admin-table">
                    <tr>
                        <td>
                            <h2> Products </h2>
                        </td>
                        <td style="float:right">
                            <a href="{{ route('admin.add') }}"><input  type="submit" class="btn btn-success" value="+ Add Product" name="newProductBtn" /></a>
                        </td>
                    </tr>
                </table>
                <table style="width:100%" class="table-responsive table-striped orders-table">
                    <hr>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th> Price</th>
                    </tr>
                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <div><img class="img-products-table" src="{{ $product->imagePath }}" /></div>
                            </td>
                            <td>
                                <div>{{ $product->title }}</div>
                            </td>
                            <td>
                                <div>{{ $product->discription }}</div>
                            </td>
                            <td>
                                <div>{{ $product->category }}</div>
                            </td>
                            <td>
                                <div>{{ $product->price }}</div>
                            </td>
                            <td>
                                <form method="get" action="{{ route('admin.productToEdit', ['id' => $product->id ]) }}">
                                    {{ csrf_field() }}
                                    <input type="image" src="{{ url('images/edit.png') }}" alt="submit" />
                                </form>
                            </td>
                            <td>
                                <form action='{{ route('admin.delete', $product->id) }}' method="post">
                                    <input type="hidden" name="_method" value="DELETE" />
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <input type="image" src="{{ url('images/delete.png') }}" alt="submit" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
