<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use View;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){

    	$finalResult = [];
    	$getData = DB::table('contacts')->get();
    	 $data = DB::table('contacts')->join('replies','replies.contact_id','=','contacts.id')->get();
    	 $finalResult['result'] = count($getData) - count($data);
    	 View::share('countmail',$finalResult['result']);
        
    }
}
