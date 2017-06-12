<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\Product;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

class ProductController extends Controller
{
    public function getIndex() {
        $products = Product::all();
        return view('pages.home', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart', $cart);

        Session::flash('success', 'Product has been added to cart!');

        return redirect()->route('product.index');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('pages.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function removeItemFromCart(Request $request, $id)
    {
        if (!Session::has('cart')) {
            return view('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        //verwijdert alles uit cart !!!!
        $request->session()->pull('cart', $cart);

        return redirect()->route('product.index');
    }


    public function getProduct($id)
    {
        $product = Product::find($id);
        return view('pages.product', ['product' => $product]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('pages.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('pages.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_utq4fyvhnxVE1QnjeSAAsYAG');

        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => 'tok_visa', // ('tok_visa' test token van stripe)  $request->input('stripeToken') obtained with Stripe.js
                "description" => "Test Charge"
            ));
            $order = new \App\Order([
                'cart' => serialize($cart),
                'name' => $request->input('name'),
                'address' => $request->input('address'),
                'postal_code' => $request->input('zip'),
                'city' => $request->input('city'),
                'country' => $request->input('country'),
                'payment_id' => $charge->id
            ]);
            $order->save();

        } catch(\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect('/')->with('checkout-success', 'Succesfully Purchased!');
    }
}
