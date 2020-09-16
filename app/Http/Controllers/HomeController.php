<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      // dd(Session::all()); 
      // $this->middleware('auth');
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function home(){
        
      // $homeitems = DB::table('items')
      // ->where('isActive',1)
      // ->get();
     

      // $tables = DB::table('tables')->get();
      // $categorys = DB::table('categories')->get();
    // return view('home',['homeitems'=>$homeitems,'tables'=>$tables,'categories'=>$categorys]);
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function about()
    {
        return view('about');
    }
    public function disclaimer()
    {
        return view('disclaimer');
    }
    public function privacy()
    {
        return view('privacy');
    }

    public function youtubetomp3(){
     return view('youtubetomp3');
    }
    
     public function freeonlinemoviestreamingsites(){
     return view('freeonlinemoviestreamingsites');
    }


 public function freeonlinegamingsites(){
     return view('freeonlinegamingsites');
    }
    public function howtotakescreenshots(){
     return view('howtotakescreenshots');
    }
    
    public function blogcategory(){
     return view('blogcategory');
    }
     public function upload()
    {
         
         $users = DB::table('specialties')->paginate(3);
        return view('uploadpSpcl',['users'=>$users]);
    }
     public function welcome()
    {
         
        return view('welcome');

    }
   
    public function  store(Request $request){
        // $path = $request->file('valueImg')->store('upload');
        $file_path=$request->file('valueImg')->getClientOriginalName();
        $filename=pathinfo($file_path,PATHINFO_FILENAME);
        // print_r($filename);die;

        $extension=$request->file('valueImg')->getClientOriginalExtension();
        $filename_toStore=$filename.'_'.time().'_'.$filename.'.'.$extension;

        \Storage::disk('s3')->put($filename, $filename_toStore, 'public');
        echo "here";
        exit();
        
        $path=$request->file('valueImg')->storeAs('SpecialItems',$filename_toStore);


        
        // print_r($file_path);die;

        // echo "testing re";

        $data=[];
        $data['valueImg']=$filename_toStore;
        $data['category']=$request->input('category');
        $data['itemId']=$request->input('itemId');
        $data['name']=$request->input('name');
        upload::insert($data);
       return redirect('upload')->with('success', 'Profile updated!');
        // $uploads = DB:: table('specialties')->get();
        // print_r($uploads);


    }
    
     
}
