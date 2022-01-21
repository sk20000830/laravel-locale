<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Services\PriceService;

class CartController extends Controller
{

    private $price_service;
    // public function __construct(PriceService $price_service)
    // {
    //     $this->price = $price_service;
    // }
    
    public function index(PriceService $price_service, Request $request)
    {
        
        $result = $price_service->payment($request);

        return view('cart', $result);

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
