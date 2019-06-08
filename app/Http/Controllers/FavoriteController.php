<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mechanic;
use App\SparePart;
use App\Agance;
use App\favorite;
use Illuminate\Support\Facades\Auth;
class FavoriteController extends Controller
{
	public function createSparepart($id)
	{		
		$idu = Auth::id();
		$favorite = new favorite;
		$favorite->user_id = $idu;
		$favorite->sparepart_id = $idu;
		$favorite->save();

	}

	public function createAgence($id)
	{		
		$idu = Auth::id();
		$favorite = new favorite;
		$favorite->user_id = $idu;
		$favorite->car_id = $idu;
		$favorite->save();

	}
	public function show()
	{
		$id = Auth::id();
		$favorite = User::where('user_id',$id);
	}

	public function cart()
    {
        return view('cart');
    }
public function addtocartsparepart($id){
	$product = SparePart::find($id); 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "sparepart" => $product->sparepart,
                        "quantity" => 1,
                        "price" => $product->price,
                        "storename" => $product->storename,
                        "filename" => $product->filename,
                        "mime" => $product->mime
                        "original_filename" => $product->original_filename
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "sparepart" => $product->sparepart,
            "quantity" => 1,
            "price" => $product->price,
            "storename" => $product->storename,
            "filename" => $product->filename,
            "mime" => $product->mime
            "original_filename" => $product->original_filename
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    
}
public function addtocartagance($id){
	$product = Agance::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                      "kindofcarhave" => $product->kindofcarhave,
                      "quantity" => 1,
                      "price" => $product->price,
                      "agancename" => $product->agancename,
                      "filename" => $product->filename,
                      "mime" => $product->mime
                      "original_filename" => $product->original_filename
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
                      "kindofcarhave" => $product->kindofcarhave,
                      "quantity" => 1,
                      "price" => $product->price,
                      "agancename" => $product->agancename,
                      "filename" => $product->filename,
                      "mime" => $product->mime
                      "original_filename" => $product->original_filename
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    
}
public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}	
