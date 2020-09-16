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
use Illuminate\Support\Facades\Log;


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
         $today = date('Y-m-d').'.log';
         // Log::useFiles('/storage/'.$today.'log');
         // Log::channel('custom_logs')->info('Something happened!'); 
         
        
      
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
        
        Log::channel('custom_logs')->info('Something mus bbdm happened!'); 
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
    
    public function howtohostontwitch()
    {
        return view('howtohostontwitch');
    }
     public function freeonlinemoviestreamingsites(){
     return view('freeonlinemoviestreamingsites');
    }


 public function freeonlinegamingsites(){
     return view('freeonlinegamingsites');
    }

     public function HowtoDeleteInstagramaccount(){
     return view('HowtoDeleteInstagramaccount');
    }
    public function howtotakescreenshots(){
     return view('howtotakescreenshots');
    }
    
    public function bestInstagramCaptions(){
     return view('bestInstagramCaptions');
    }
     
     public function howtopostoninstagram(){
     return view('howtopostoninstagram');
    }
     public function howtogetnetflixforfree() {
         return view('howtogetnetflixforfree');
     }
     public function howtosaveinstagramMedia() {
         return view('howtosaveinstagramMedia');
     }
    public function blogcategory(){
     return view('blogcategory');
    }
     public function blogcategoryfreebies(){

     return view('blogcategory');
    }
     public function blogcategorysocial(){
        
     return view('blogcategory');
    }
     public function blogcategorytrending(){
     return view('blogcategory');
    }
     public function blogcategoryhowto(){
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
   
   
    
     
}
