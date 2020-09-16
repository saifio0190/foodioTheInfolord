<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use App\User as user;
use App\uploadModel as upload;
use App\addItem as items;
use App\Order as order; 
use App\User_Order as user_order;
use App\addtable as table;
use App\addcategory as categorys;

ini_set('memory_limit', '128M');
class Userorder extends Controller
{
    //
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

      public function homeitems()
    {

      $homeitems = DB::table('items')
      ->where('isActive',1)
      ->get();
     

      $tables = DB::table('tables')->get();
      $categorys = DB::table('categories')->get();

      // echo "<pre>";
      // // // var_dump($categorys);
      // // // echo "<br>";
      // print_r($categorys);
      // print_r($categorys[0]->name);
      // exit();

     return view('home',['homeitems'=>$homeitems,'tables'=>$tables,'categories'=>$categorys]);
    }


function cancelOrderDone(Request $request){

$data=[];
        $id=$request->input('id');
        // echo "id::".$id;
        $update = '';

        $order = User_Order::find($id);
        

        

       if(!empty($order)){
        $order->paymentStatus = 1;
        $order->isCancel = 1;
        
        $update = $order->save();
       }

       if ($update){
        $data=[
            'status'=>'1',
            'msg'=> 'Cancelled successfully'
        ];
       }else{
        $data=[
            'status'=>'0',
            'msg'=>'Failed to cancel'
        ];
      }
      return $data;

}



      public function myOrders()
    {
       

 $id=Auth::user()->id;
 // echo $id;
 $email=Auth::user()->email;

      $orders = DB::table('user_orders')
      ->where('email',$email)
      ->get();
      

     return view('myOrders',['orders'=>$orders]);
    }
  

 public function  searchItems(Request $request)
    {    

      $tables = DB::table('tables')->get();
      $categorys = DB::table('categories')->get();



      $itemCategory= $request->searchCategory;
      // echo $itemCategory;
      if (!empty($itemCategory)) {
        # code...
        $homeitems = DB::table('items')
      ->where('category',$itemCategory)
      ->Where('isActive',1)
      ->get();
      }else{
        $homeitems = DB::table('items')
        ->where('isActive',1)
        ->get();

      }
  // echo "<pre>";
  //     print_r($homeitems);
  //     exit();
      
    

     return view('home',['homeitems'=>$homeitems,'tables'=>$tables,'categories'=>$categorys]);
    }

    public function random_string($length){
      $chars = '23456789';
      $randMax = strlen($chars) - 1;
      $r = '';
      for ($i = 1; $i <= $length; $i++)
      $r .= substr($chars, mt_rand(0, $randMax), 1);
      return $r;
    }

    public function addOrder(Request $request)
    {
      $response = ['status' => 0, 'msg' => 'Error'];
      $intval1=1;
      $item_counter=0;
      $timestamp='';
      $code='';
      $amount_total=0;
      $code = $this->random_string(3);
      $timestamp = time(); 
      $id=1;

      $lastData1 = DB::table('orders')->first();
      if ($lastData1) {
      $lastData = order::all() -> last()->id;
      $lastData=intval($lastData)+1;


       }else{
       $lastData=1;
       }
      
      
      
      $orderIDtoCus=$timestamp.'-'.$lastData.$code;
      try {
        DB::beginTransaction();
        $finalOrder=$request->finalOrder;
        $data=[];
        foreach($finalOrder as $key => $item){
          $id=$item[0];
          $qty=$item[1];
          $itemEle = items::find($id);
          if ($itemEle){
            $name=$itemEle->name;
            $price=$itemEle->price;
            $amount=$price * $qty;
            $amount_total += $amount;
            $email=Auth::user()->email;
          } else{
            // echo "Unable to find Items";
            $response = ['status' => 0, 'msg' => 'Unable to find Items'];
            exit();
          } 
          $data['order_id']=$orderIDtoCus;
          $data['email']=$email;
          $data['tableId']=$request->input('tableId');
          $data['name']=$name;
          $data['itemId']=$id;
          $data['qty']=$qty;
          $data['amount']=$amount;
          $data['deliveryStatus']=0;
          $data['paymentStatus']=0;   
          $data['deliverBy']='';
          $data['paymentRecived']='';  
         $ordeInserted= order::insert($data);
          $item_counter ++;
        }
        $order_data=[];
        $order_data['order_id']=$orderIDtoCus;
        $order_data['email']=$email;
        $order_data['tableId']=$request->input('tableId');
        $order_data['amount']=$amount_total;
        $order_data['u_id']=$id;
        $order_data['items']=$item_counter;
        $order_data['deliveryStatus']=0;
        $order_data['paymentStatus']=0;  
        $order_data['isCancel']=0;  
        $order_data['deliverBy']='';
        $order_data['paymentRecived']='';   
        user_order::insert($order_data);
        $response = ['status' => 1, 'msg' => '', 'orderId' => $orderIDtoCus];
        DB::commit();
      } catch (\Exception $e) {
        $response = ['status' => 0, 'msg' => 'transaction Failed'];
        DB::rollback();
      } finally{
        
        return $response;
      }   
    }

    
   
}
