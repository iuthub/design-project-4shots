<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Images;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function insertform(){

        return view('adding');
    }
    public function insert(Request $request){


        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|max:25',
            'address' => 'required|max:255',
            'area' => 'required|max:255',
            'room' => 'required|max:255',
            
        ]);

        if ($validator->fails()) {
            return redirect('/addpost')
                ->withInput()
                ->withErrors($validator);
        }
    
   

$product = new Product();
$images = new Images();
$images->save();


$product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->price = $request -> input('price');
        $product->price_type = $request->input('price_type');
        $product->address = $request->input('address');
        $product->rooms = $request->input('room');
        $product->area = $request->input('area');
        $product->user_id = Auth::user()->id;
        for($i=1;$i<11; $i++) {
            $name = "image_"."$i";
            $dest = $images->id;
            if ($request->hasFile($name)) {

                $request->file($name)->move("images/".$dest, $name.".jpg");
                $images->$name = "$name".".jpg";

            }
        }
//DB::insert('insert into products (title, description, category, price, price_type) values(?, ?,?, ?, ?)', [$title, $description, $category, $price, $price_type]);

        $product->save();
$images->save();

return redirect('/home');

}


public function search(Request $request)
{
    
    $desc = $request->search_input;
    
$products = DB::table('products')->where('description', 'LIKE', "%$desc%")->get();


    $images= Images::all();

 return view('pages.search')->with("products", $products)->with("images", $images);
    
}








public function rate( Request $request)
{
    $id = $request->input('id');
    $product = Product::find($id);
    $product->rating = $request->input('ratings');
    $product->votes++;
    $product->save();

    return redirect()->back();
}
public function show_all($category){
    $products = DB::table('products')->where('category', '=', $category)->paginate(5);

    $images= Images::all();

        return view('pages.category')->with("products", $products)->with("images", $images);

}


    public function show_product($id){
    $product = Product::find($id);
    $user = User::find($product->user_id);
      $product->views++;
        $product->save();
         $images= Images::find($product->id);
        return view('pages.announcement')->with("product", $product)->with("images", $images)->with("user", $user);

    }

}

