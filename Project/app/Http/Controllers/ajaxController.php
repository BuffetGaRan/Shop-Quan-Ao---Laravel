<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\image;

class ajaxController extends Controller
{
    // Admin Page
    // ----------------------------
    public function Search(Request $request){

    	if($request->get('value'))
        {
            $value = $request->get('value');
            $product = product::where('name', 'LIKE', "%{$value}%")->get();
            $data = '';
            foreach ($product as $item){
                if($item->hot){
                    $hot = 'HOT';
                }
                else{
                    $hot = 'NOT HOT';
                }

                if($item->gender_id == 1){
                    $gender = 'Nam';
                }
                else{
                    $gender = 'Nữ';
                }
                
                $data .= '  <tr class="tr">
                                <td>'.$item->id.'</td>
                                <td>'.$item->name.'</td>
                                <td class="text-primary">'.$item->price.'$</td>
                                <td><img width="100" src="'.asset("Upload").'/'.$item->image.'"></td>
                                <td><div class="desc">'.$item->description.'</div></td>
                                <td>'.$item->amount.'</td>
                                <td>'.$item->discount.'%</td>
                                <td>'.$hot.'</td>
                                <td>'.$gender.'</td>
                                <td class="action">
                                    <button onclick="Update('.$item->id.')" class="btn__update__product"><i class="fas fa-retweet"></i></button>
                                    <form action="admin/delete-product" method="POST">
                                        <input type="hidden" value="'.$item->id.'" name="delete">
                                        <button type="submit"><i class="fas fa-minus"></i></button>
                                    </form>
                                </td>
                            </tr>';
            }
            return $data;
        }
    }


    // Product Page
    // ----------------------------
    public function FilterProduct(Request $request){

        if($request->get('range')){
            $value = $request->range;
            $start = $value[0];
            $end = $value[1];
            $priceSearchProduct = product::whereBetween('price', [$start, $end])->paginate(10);
            $dataRange = '';
            foreach ($priceSearchProduct as $item){
                $dataRange .= '  <div class="item">
                                <div class="card__hot">
                                    <div class="card__hot__image">
                                        <a href="product/detail/'.$item->id.'"><img src="'.asset("Upload").'/'.$item->image.'"></a>
                                    </div>
                                    <div class="card__hot__title">
                                        <div class="card__hot__title__name">'.$item->name.'</div>
                                        <div class="card__hot__title__price">'.$item->price.'$</div>
                                    </div>
                                    <div data-id="'.$item->id.'" class="item__cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>';
            }
            return $dataRange;
        }

        if($request->get('idGender')){
            $value = $request->idGender;
            $gender = substr($value, 0, 1);
            $product_category = substr($value, -1);
            $genderSearchProduct = product::where([['gender_id', $gender],['product_category_id', $product_category]])->get();
            $dataGender = '';
            foreach ($genderSearchProduct as $item){
                $dataGender .= '  <div class="item">
                                <div class="card__hot">
                                    <div class="card__hot__image">
                                        <a href="product/detail/'.$item->id.'"><img src="'.asset("Upload").'/'.$item->image.'"></a>
                                    </div>
                                    <div class="card__hot__title">
                                        <div class="card__hot__title__name">'.$item->name.'</div>
                                        <div class="card__hot__title__price">'.$item->price.'$</div>
                                    </div>
                                    <div data-id="'.$item->id.'" class="item__cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>';
            }
            return $dataGender;
        }

        if($request->get('more')){
            $value = $request->more;
            
            function GetValue($value){
                $getValue = '';

                if($value == 'hot'){
                    $getValue = product::where('hot', '1')->get();
                }
                elseif($value == 'discount'){
                    $getValue = product::where('discount', '!=' ,'0')->get();
                }
                elseif($value == 'selled'){
                    $getValue = 'selled';
                }
                return $getValue;
            }
            
            function AddValue($value){
                $dataMore = '';
                foreach ($value as $item) {
                    $dataMore .= '  <div class="item">
                                <div class="card__hot">
                                    <div class="card__hot__image">
                                        <a href="product/detail/'.$item->id.'"><img src="'.asset("Upload").'/'.$item->image.'"></a>
                                    </div>
                                    <div class="card__hot__title">
                                        <div class="card__hot__title__name">'.$item->name.'</div>
                                        <div class="card__hot__title__price">'.$item->price.'$</div>
                                    </div>
                                    <div data-id="'.$item->id.'" class="item__cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>';
                }
                return $dataMore;
            }

            return AddValue(GetValue($value));
        }

        if($request->get('search'))
        {
            $search = $request->get('search');
            $product = product::where('name', 'LIKE', "%{$search}%")->get();
            $dataSearch = '';
            foreach ($product as $item){
                $dataSearch .= '  <div id="product-item" class="item">
                            <div class="card__hot">
                                <div class="card__hot__image">
                                    <a href="product/detail/'.$item->id.'"><img src="'.asset("Upload").'/'.$item->image.'"></a>
                                </div>
                                <div class="card__hot__title">
                                    <div class="card__hot__title__name">'.$item->name.'</div>
                                    <div class="card__hot__title__price">'.$item->price.'$</div>
                                </div>
                                <div data-id="'.$item->id.'" class="item__cart">
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </div>
                        </div>';
            }
            return $dataSearch;
        }
    }

    public function GetProduct(Request $request){
        if($request->ajax()){
            if($request->id > 0){
                $product = product::where('id', '<', $request->id)->orderBy('id', 'DESC')->limit(5)->get();
            }
            else{
                $product = product::orderBy('id', 'DESC')->limit(5)->get();
            }

            $output = '';
            $last_id = '';
            if(!$product->isEmpty()){
                foreach($product as $item){
                    $output .= '  <div class="item">
                                <div class="card__hot">
                                    <div class="card__hot__image">
                                        <a href="product/detail/'.$item->id.'"><img src="'.asset("Upload").'/'.$item->image.'"></a>
                                    </div>
                                    <div class="card__hot__title">
                                        <div class="card__hot__title__name">'.$item->name.'</div>
                                        <div class="card__hot__title__price">'.$item->price.'$</div>
                                    </div>
                                    <div data-id="'.$item->id.'" class="item__cart">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                </div>
                            </div>';
                    $last_id = $item->id;
               }
               $output .= '<button class="load_more_button" data-id="'.$last_id.'" id="load_more_button">Load More</button>';
                
            }
            else{
            $output .= '<button class="load_more_button">No More Product</button>';
            }
            return $output;
        }
    }


    // Add Cart
    // ----------------------------
    public function AddCart(Request $request){
        $product = product::find($request->id);

        if(!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        if(!$cart) {
            $cart = [
                    $request->id => [
                        "id" => $product->id,
                        "name" => $product->name,
                        "price" => $product->price,
                        "photo" => $product->image,
                        "quantity" => 1,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if(isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        $cart[$request->id] = [
            "id" => $product->id,
            "name" => $product->name,
            "price" => $product->price,
            "photo" => $product->image,
            "quantity" => 1,
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // Remove Cart
    // ----------------------------
    public function RemoveCart(Request $request){

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
