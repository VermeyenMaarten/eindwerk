@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <form method="post" action="{{ route('admin.update', ['id' => $product->id ]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="POST" />
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <table style="width:100%" class="table-responsive admin-table">
                        <tr>
                            <td>
                                <h2> Edit Product </h2>
                            </td>
                            <td style="float:right">
                                <input type="submit" class="btn btn-primary" value="Update" name="updateProductBtn" />
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control input-lg" id="name" type="text" value="{{ $product->title }}" name="name"
                               required>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control input-lg" id="category" type="tel" value="Product Category" name="category" required>
                            <option value="1">Proteins</option>
                            <option value="2">Mass Gainers</option>
                            <option value="3">Creatine</option>
                            <option value="4">Vitamins</option>
                            <option value="5">Amino Acids</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input class="form-control input-lg" id="description" type="text" value="{{ $product->discription }}" name="description"
                               required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control input-lg" id="price" type="tel" value="{{ $product->price }}" name="price"
                               required>
                    </div>
                    <div class="form-group">
                        <label>Image Path</label>
                        <input class="form-control input-lg" id="imagePath" type="text" value="{{ $product->imagePath }}" name="imagePath"
                               required>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
