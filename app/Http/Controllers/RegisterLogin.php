<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User as user;
use App\AdminUsers as adminusers;
use App\KitchenUsers as kitchenusers;


class RegisterLogin extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {

  }
     public function adminlogin()
    {
         // $users = DB::select('select * from specialties');
      
        return view('adminlogin');
    }
         public function adminregister()
    {
         // $users = DB::select('select * from specialties');
        return view('adminregister');
    }

    public function addUser(Request $request){

                            $this->validate($request, [
                                // 'email' => 'required|email|max:255',
                                'email' => 'required|unique:adminusers|max:255',
                                'name' => 'required|max:25',
                                'password' => 'required|max:25',
                                'userType' => 'required|max:25',
                               
                            ]);
        $data=[];
         $data['name']=$request->input('name');
         $name=$request->input('name');
          $email=$request->input('email');
         
         $data['email']=$request->input('email');

         $otpPIN=$request->input('otpPIN');

         $otpGen=$request->input('otpGen');
         $data['password']=Hash::make($request->input('password'));
         $userType=$request->input('userType');
         $data['privledge']=1;
         $otpGen=intval(base64_decode($otpGen))-99;
         if ($otpGen==$otpPIN) {
           	if ($userType == 'admin') {
	          	adminusers::insert($data);
	          	Session::put('adminusers',$email);
	          	Session::put('adminname',$name);
	          	Session::save();
               return redirect('orders');
          	}else{
          		kitchenusers::insert($data);
	          	Session::put('chefusers',$email);
	          	Session::put('chefname',$name);
	          	Session::save();
              return redirect('ordersk');
          	}
	        
        }else{
            echo "Invalid OTP"; exit();
        }
    }

    function random_string($length){
      $chars = '123456789';
      $randMax = strlen($chars) - 1;
      $r = '';
      for ($i = 1; $i <= $length; $i++)
        $r .= substr($chars, mt_rand(0, $randMax), 1);
    	return $r;
    }

    public function sendOTP(Request $request){
      $pin=$this->random_string(4);
      $message = "Welcome+to+The+foodiO+Please+use+this+pin+No+for+registration-+".$pin; 
      $host = 'http://sms6.routesms.com:8080/bulksms/bulksms';
      $checkHearders = @get_headers($host);
      if(trim($checkHearders[0]) != "HTTP/1.1 200"){
        echo "failed to reach SMS-OTP server, Please check your internet connectivity."; exit();
      }
      $username = 'easternotp'; 
      $password = 'sd6yajad'; 
      $mobile='9762390190';
      // $mobile='8983452785';
      $dlr='1';

      $smsURL=$host.'?username='.$username.'&password='.$password.'&type=0&destination=91'.$mobile.'&source=NetGen&dlr=1&message='.$message;  
      $response = file_get_contents($smsURL);
      if (empty($response))  
      {
        echo "failed "; exit();
      }
      $pin=intval($pin);
      echo  base64_encode($pin+99);
    }

    public function loginAdmin(Request $request){
            $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required|max:25',
            ]);

            $email=$request->input('email');
            $password=$request->input('password');
            $userType=$request->input('userType');

            if ($userType=='admin') {
              
               $user=  DB::table('adminusers')->where('email', $email)->first();

            if ($user && Hash::check($password, $user->password)){
              Session::put('adminusers',$email);
              Session::put('adminname',$user->name);
              Session::save();
              // dd((session()->all());
              dd(Session::all());
              echo "success admin"; exit();
            }
           
            	
            }elseif($userType=='chef'){
            	   $user=  DB::table('kitchenusers')->where('email', $email)->first();
            if ($user && Hash::check($password, $user->password)){
              Session::put('chefusers',$email);
              Session::put('chefname',$user->name);
              Session::save();
              echo "success chef"; exit();
            }

        }else{
          echo "Invalid user Type";
          exit();
        }
      }

        function adminLogout(){
          	Session::flush();
           	return redirect('/adminlogin');
        }

}
