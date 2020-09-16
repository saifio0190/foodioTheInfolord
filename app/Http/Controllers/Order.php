<?php
 namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session,DB;
use App\Order as orders;
use App\User_Order as user_order;

class Order extends Controller
{
	public function __construct()
    {
      // dd(session::all());
      	if(\URL::current() != asset('adminlogin')){
        	
          		if (Session::has('adminusers')) {
            		$email=Session::get('adminusers');
            		$name=Session::get('adminname');
          		}else{
            		echo "Please login first"; 
            		\Redirect::to('adminlogin')->send();
            		exit();
	          	}
	        }else{
	          	\Redirect::to('adminlogin')->send();
	          	exit();
	        }
      	}
   

    public function orders()
    {
        

        // $orders = DB::table('user_orders')->where('paymentStatus', 0)->orderby('id','DESC') ->paginate(2);

        // $order_Details= DB::table('orders')->where('paymentStatus',0);

      $orders = DB::table('orders')->rightjoin('user_orders', 'orders.order_id', '=', 'user_orders.order_id')
      ->select('user_orders.*', 'user_orders.id', 'orders.name','orders.qty','orders.created_at')
      ->Where('user_orders.paymentStatus',0)
      ->where('user_orders.isCancel',0)

      ->orderby('user_orders.id','desc') 
       ->paginate(40);
  
    return view('orders',['orders'=>$orders]);
    }
       public function ordersummary()
    {

          $orders = DB::table('orders')->rightjoin('user_orders', 'orders.order_id', '=', 'user_orders.order_id')
      ->select('user_orders.*', 'user_orders.id', 'orders.name','orders.qty','orders.created_at')
      ->where('user_orders.paymentStatus',1)
      ->Where('user_orders.isCancel',0)
       ->paginate(40);
        return view('ordersummary',['orders'=>$orders]);
    }
     public function pendingOrders() {
        
        $pendingOrderCounter=0;
        $orders = DB::table('user_orders')->where('paymentStatus', 0)
        ->orWhere('user_orders.paymentStatus',0);
        foreach ($orders as $order) {
          # code...
          $pendingOrderCounter ++;
        }
       
        return $pendingOrderCounter;
        
        
    }

     public function deleOrder(Request $request){
     
      $id=$request->input('id');
      $destroy = '';
      $order = User_Order::find($id);
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
        // echo "id::".$id;
        $update = '';

        $order = User_Order::find($id);
        

        

       if(!empty($order)){
        $order->paymentStatus = 1;
        $order->paymentRecived =  Session::get('adminusers');
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
            'msg'=>'failed to update'
        ];
      }
      return $data;
    }
}
