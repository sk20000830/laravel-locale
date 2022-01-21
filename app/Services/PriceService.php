<?php
namespace App\Services;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
// use Illuminate\Http\Request;


class PriceService{

    public function payment($request){

        $user= Auth::user();

        if($request->session()->has('cartData')){

            $sessionCartData = $request->session()->get('cartData');

            $menu_ids = array_keys($sessionCartData);

            $items = Menu::whereIn('id', $menu_ids)->get();

            $quantity = $request->session()->get('cartData');

            $total = 0;

            foreach($quantity as $menu_id => $q){

                $item = Menu::where('id', $menu_id)->first();
                
                $subtotal = $item->menu_price * $q;

                $total += ($q * $item->menu_price);
            }

            return compact('user', 'items', 'quantity', 'total');
             

        }else{
            return ['user' => $user, 'msg' => 'false'];
        }
    }
}