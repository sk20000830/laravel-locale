<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
    {
        $user= Auth::user();

        $sessionCartData = $request->session()->get('cartData');

        var_dump($sessionCartData);
        exit;

        //セッション情報を取得、変数に代入
        // $sessionUser = User::find($request->session()->get('user_id'));

        //removeメソッドでの配列削除時の配列連番抜け対策
        // if ($request->session()->has('cartData')) {
        //     $cartData = array_values($request->session()->get('cartData'));
        // }

        // if (!empty($cartData)) {
        //     $sessionMenuId = array_column($cartData, 'session_menu_id');
        //     $item = Menu::find($sessionMenuId);

        //     foreach ($cartData as $index => $data) {
                
        //         // $data['session_menu_name'] = $item[$index]->menu_name;
        //         // $data['session_quantity'] = $item[$index]->quantity;
        //         // $data['session_price'] = $item[$index]->price;
        //         $totalPrice = $item['session_price'] * $data['session_quantity'];
        //     }

        //     return view('cart', compact('user', 'totalPrice'));

        // } else {

        //         return view('menu.index');
        // }
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sessionCartData = $request->session()->get('cartData');
        
        if(isset($sessionCartData[$request->menu_id])){

            $sessionCartData[$request->menu_id] = (int)$sessionCartData[$request->menu_id] + (int)$request->quantity;
            
        }else{

            $sessionCartData[$request->menu_id] = (int)$request->quantity;
        }
        
        $request->session()->put('cartData', $sessionCartData);

        return redirect()->route('cartlist_index');


        // $cartData = [
        //     'session_menu_id' => $request->menu_id,
        //     'session_quantity' => $request->quantity,
        // ];


        // if (!$request->session()->has('cartData')){
        //     $request->session()->put('cartData', $cartData);
        // }else {
        //     //sessionにcartData配列が有る場合、情報取得
        //     $sessionCartData = $request->session()->get('cartData');

        //     //isSameMenuId定義 menu_id同一確認 false = 同一ではない状態を指定
        //     $isSameMenuId = false;
        //     foreach ($sessionCartData as $index => $sessionData) {
        //         //menu_idが同一であれば、$isSameMenuIdをtrueにする 
        //         if ($sessionData['session_menu_id'] === $cartData['session_menu_id'] ) {
        //             $isSameMenuId = true;
        //             $quantity = $sessionData['session_quantity'] + $cartData['session_quantity'];
        //             //cartDataを上書き
        //             $request->session()->put('cartData.' . $index . '.session_quantity', $quantity);
        //             break;
        //         }
        //     }

        //     //menu_idが同一ではない状態を指定 その場合であればpushする
        //     if ($isSameMenuId === false) {
        //         $request->session()->put('cartData', $cartData);
        //     }
        // }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
