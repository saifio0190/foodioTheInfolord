<?php
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session,DB;
use App\Order as orders;
use App\User_Order as user_order;

class OrderK extends Controller
{
	public function __construct()
    {
     
        	
          		if (Session::has('chefusers') ) {      
            		$email=Session::get('chefusers');
            		$name=Session::get('chefname');
          		}else{
            		echo "Please login first"; 
            		\Redirect::to('adminlogin')->send();
            		exit();
	          	}
	        }
    
   
   // if (empty($email)) {
   // 	$email='kitchen@foodiO.com';
   // 	# code...
   // }

    public function orders() {
        

       $orders = DB::table('orders')->rightjoin('user_orders', 'orders.order_id', '=', 'user_orders.order_id')
      ->select('user_orders.*', 'user_orders.id', 'orders.name','orders.qty','orders.created_at')
      ->where('user_orders.deliveryStatus',0)
      ->Where('user_orders.isCancel',0)
       ->paginate(40);
  
        
        return view('ordersK',['orders'=>$orders]);
    }
       public function ordersummary(){

        $orders = DB::table('orders')->rightjoin('user_orders', 'orders.order_id', '=', 'user_orders.order_id')
      ->select('user_orders.*', 'user_orders.id', 'orders.name','orders.qty','orders.created_at')
      ->where('user_orders.deliveryStatus',1)
      ->Where('user_orders.isCancel',0)
       ->paginate(40);
       // echo "<pre>";
       // print_r($orders);

       // exit();

        
        return view('ordersummaryK',['orders'=>$orders]);
    }
      public function pendingOrders() {
        

        $orders = DB::table('user_orders')->where('deliveryStatus', 0);
        $count=count($orders);
        echo $count;

        
        
    }
     public function deleOrder(Request $request){
     
      $id=$request->input('id');
      $destroy = '';
      $order = user_order::find($id);
      if(!empty($order)){
        $destroy = $order->delete();
      }
      if ($destroy){
        $data=[
            'status'=>'1',
            'msg'=>'You have just deleted one order'
        ];
      }else{
        $data=[
            'status'=>'0',
            'msg'=>'failed to cancel order'
        ];
      }
      return $data;
    }
     public function makeOrderPayDone(Request $request){
        $data=[];
        $id=$request->input('id');
        $update = '';

        $order = user_order::find($id);
        

        

       if(!empty($order)){
        $order->deliveryStatus = 1;
        $order->deliverBy =  Session::get('chefusers');
        $update = $order->save();
       }

       if ($update){
        $data=[
            'status'=>'1',
            'msg'=> 'item is updated'
        ];
       }else{
        $data=[
            'status'=>'0',
            'msg'=>'failed to update item'
        ];
      }
      return $data;
    }
}
