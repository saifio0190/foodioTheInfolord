<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

class TableNCategory extends Controller
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



     public function addcatNtable(Request $request){
       return view('addcategoryNtables');
     
    }
      public function addcategory(Request $request){

                             $this->validate($request, [
                                'added' => 'required|email|max:255',
                                'name' => 'required|max:25',
                               
                            ]);
        $data=[];
         $data['name']=$request->input('name');
        $data['added']=$request->input('added');
       
        categorys::insert($data);
        return back()->with('success', 'You have just added a cusine category');

        // Session::flash('message', "Special message goes here");
        exit();
     
    }

    public function addtables(Request $request){
                     $this->validate($request, [
                                'added' => 'required|email|max:255',
                                'name' => 'required|max:25',
                               
                            ]);
        $data=[];
         $data['name']=$request->input('name');
        $data['added']=$request->input('added');
       
        table::insert($data);
        return back()->with('success', 'You have just added one table');

        // Session::flash('message', "Special message goes here");
        exit();
     
    }
    public function catNtable(Request $request){
        $tables = DB::table('tables')->paginate(6);
        $categorys = DB::table('categories')->paginate(6);

        // return view('user.index', ['users' => $users]);
        return view('categoryNtables',['tables'=>$tables,'categories'=>$categorys]);
       // return view('categoryNtables');
     
  
    }
}
