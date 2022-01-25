<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Traits\CartTrait;
use Carbon\Carbon;


    class OrderService
    {

        public function saveToOrders($request)
        {
            $user= Auth::user();
        
            $data = Order::create([
                'user_id' => $user->id
            ]);

            // $request->session()->put('orderId', $data->id);
            return $data->id;
        }

        public function saveToOrderDetails($request, $orderId)
        {
            $quantity = $request->session()->get('cartData');
            $date = Carbon::now(); 

            // keyをtableのカラム名と一致させ、直接insertするための連想配列を作成
            foreach($quantity as $menuId => $q)
            {
                $data[] = 
                    array('menu_id' => $menuId, 'quantity' => $q, 'order_id' => $orderId, 'created_at' => $date, 'updated_at' => $date);
            }
            
            $data = OrderDetail::insert($data); 

            //cartDataをセッションから削除
            $request->session()->remove('cartData');
            

        }

        public function getOrderData($request)
        {
           

            $orderData = OrderDetail::where('order_id', $request->orderId)->get();

            // foreach($orderData as $order)
            // {
            //     echo $order->menu_id;
            // }

            // exit;

            return $orderData;

            
        }

    }