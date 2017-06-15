<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function getOrders()
    {
        $orders = Order::orderBy('updated_at', 'asc')->get();

        return view('pages.admin-orders', [
            'orders' => $orders
        ]);
    }

    public function getProducts()
    {
        $products = Product::orderBy('updated_at', 'asc')->get();

        return view('pages.admin-products', [
            'products' => $products
        ]);
    }

    public function addProduct()
    {
        return view('pages.admin-add-product');
    }

    public function saveProduct(Request $request)
    {
        $product = new Product([
            'imagePath' => $request->input('imagePath'),
            'title' => $request->input('name'),
            'discription' => $request->input('description'),
            'category' => $request->input('category'),
            'price' => $request->input('price'),
            'featured' => (isset($_POST['featured'])) ? 1 : 0
        ]);

        $product->save();

        return redirect('admin/products');
    }

    public function deleteProduct($id)
    {
        $product = Product::where('id', $id);
        $product->delete();

        return redirect('admin/products');
    }

    public function updateProduct($id)
    {
        $product = Product::find($id);

        $product->title = $_POST['name'];
        $product->discription = $_POST['description'];
        $product->category = $_POST['category'];
        $product->price = $_POST['price'];
        $product->imagePath = $_POST['imagePath'];
        $product->save();

        return redirect('admin/products');
    }

    public function productToEdit($id)
    {
        $product = Product::find($id);
        return view('pages.admin-edit-product', ['product' => $product]);
    }
}
