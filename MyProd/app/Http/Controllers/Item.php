<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\User as user;
use App\uploadModel as upload;
use App\addItem as items;
use App\Order as order;
use App\addtable as table;
use App\addcategory as categorys;
use App\AdminUsers as adminusers;
use App\KitchenUsers as kitchenusers;
use Session,DB;
use App\Orders as orders;

class Item extends Controller
{
    //

    public function __construct()
    {
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
      	 public function items(){
        // return view('items');
        $items = DB::table('items')->paginate(60);
        // $items = DB::table('items');
        return view('items',['items'=>$items]);
    }
      public function addItem(Request $request){
       $categorys = DB::table('categories')->paginate(20);
        return view('addItems',['categories'=>$categorys]);
        // return view('addItems');

    }  

    public function manageItems(){
        
        
     


         $items = DB::table('items')->paginate(12);
        
        
        return view('manageItems',['items'=>$items]);
    }

     public function addItemBack(Request $request){
        
    
                     $this->validate($request, [
                                'added' => 'required|email|max:255',
                                'name' => 'required|regex:/^[a-zA-Z ]+$/|max:25',
                                'img' => 'required',
                                'price' => 'required|numeric',
                                'category' => 'required|max:25',
                            ]);

        $file_path=$request->file('img')->getClientOriginalName();
        $filename=pathinfo($file_path,PATHINFO_FILENAME);
        $extension=$request->file('img')->getClientOriginalExtension();
        $filename_toStore=$filename.'_'.time().'_'.$filename.'.'.$extension;
        $filename_toStore1=$filename.'_'.time().'.'.$extension;
        $path=$request->file('img')->storeAs('items',$filename_toStore1);

        $data=[];
        
        $data['added']=$request->input('added');
        $data['name']=$request->input('name');
        $data['isSpecial']=$request->input('isSpecial');
        $data['isActive']=1;
        $data['price']=$request->input('price');
        $data['img']=$filename_toStore1;
        $data['category']=$request->input('category');
        items::insert($data);
        return back()->with('success', 'You have just added one item');
        
        exit();
    }


    function makeItemActive(Request $request){

        $data=[];
        $id=$request->input('id');
        $update = '';
  
        $item = items::find($id);

      

        

       if(!empty($item)){
        $item->name = $item->name;
        $item->price = $item->price;
        $item->isSpecial = $item->isSpecial;
        $item->isActive = 1;
        $update = $item->save();
       }

       if ($update){
        $data=[
            'status'=>'1',
            'msg'=> 'item is activated'
        ];
       }else{
        $data=[
            'status'=>'0',
            'msg'=>'failed to Activate item'.$id
        ];
      }
      return $data;

    }
    function makeIteminActive(Request $request){

        $data=[];
        $id=$request->input('id');
        $update = '';
  
        $item = items::find($id);

      

        

       if(!empty($item)){
        $item->name = $item->name;
        $item->price = $item->price;
        $item->isSpecial = $item->isSpecial;
        $item->isActive = 0;
        $update = $item->save();
       }

       if ($update){
        $data=[
            'status'=>'1',
            'msg'=> 'item is activated'
        ];
       }else{
        $data=[
            'status'=>'0',
            'msg'=>'failed to Activate item'.$id
        ];
      }
      return $data;

    }
      public function deleteItem(Request $request){
     
      $id=$request->input('id');
      $destroy = '';
      $item = items::find($id);
      if(!empty($item)){
        $destroy = $item->delete();
      }
      if ($destroy){
        $data=[
            'status'=>'1',
            'msg'=>'You have just removed one item'
        ];
      }else{
        $data=[
            'status'=>'0',
            'msg'=>'failed to remove item'
        ];
      }
      return $data;
      // return redirect('items')->with('success',$data['msg'] );
    }
      public function updateItem(Request $request){

        $this->validate($request, [
                            
                                'name' => 'required|max:25',
                                'price' => 'required|numeric',
                                
                            ]);
        $data=[];
        $id=$request->input('id');
        $update = '';

        $item = items::find($id);
        $name=$request->input('name');
        $price=$request->input('price'); 
        $isSpecial=$request->input('isSpecial');
      

        

       if(!empty($item)){
        $item->name = $name;
        $item->price = $price;
        $item->isSpecial = $isSpecial;
        $item->isActive = 1;
        $update = $item->save();
       }

       if ($update){
        $data=[
            'status'=>'1',
            'msg'=> 'item is updated'
        ];
       }else{
        $data=[
            'status'=>'0',
            'msg'=>'failed to remove item'
        ];
      }
      return $data;

    }
   
}
