@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <form method="post" action="{{ route('admin.save') }}">
                    {{ csrf_field() }}

                <table style="width:100%" class="table-responsive admin-table">
                    <tr>
                        <td>
                            <h2> + New Product </h2>
                        </td>
                        <td style="float:right">
                            <input type="submit" class="btn btn-primary" value="Save" name="saveProductBtn" />
                        </td>
                    </tr>
                 </table>
                <hr>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control input-lg" id="name" type="text" placeholder="Product Name" name="name"
                           required>
                </div>
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control input-lg" id="category" type="tel" placeholder="Product Category" name="category" required>
                        <option value="1">Proteins</option>
                        <option value="2">Mass Gainers</option>
                        <option value="3">Creatine</option>
                        <option value="4">Vitamins</option>
                        <option value="5">Amino Acids</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input class="form-control input-lg" id="description" type="text" placeholder="Product Description" name="description"
                           required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input class="form-control input-lg" id="price" type="tel" placeholder="Product Price" name="price"
                           required>
                </div>
                <div class="form-group">
                    <label>Image Path</label>
                    <input class="form-control input-lg" id="imagePath" type="text" placeholder="Image url" name="imagePath"
                           required>
                </div>
                    <br>
                    <div class="form-group">
                        <label>Featured</label>
                        <br>
                        <input id="featured" type="checkbox" name="featured" /> Check to feature on front page
                    </div>
                    </form>
            </div>
        </div>
    </div>
@endsection
