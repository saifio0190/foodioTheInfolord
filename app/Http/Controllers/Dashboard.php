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
use App\User as user;
use App\Services\MyService;
use App\uploadModel as upload;
use App\addItem as items;

class Dashboard extends Controller
{
    //


    public function __construct(MyService $myService) {
        // $this->middleware('auth');
        $this->myService = $myService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function admindashboard()
    {
    	# code...
    	return view('dashboard');
    }
    public function api_test( Request $request){

    	$name1=$request->name;
    	$data=[
       'name'=>'saif',
       'age'=>24,
       'add'=>'bhiwandi',
        'name1'=>$name1
    	];

    	return response()->json($data);
    }

    public function testService()
    {
        $abc = $this->myService->myServiceTest();
        echo "<pre>"; print_r($abc); exit();
    }
}
