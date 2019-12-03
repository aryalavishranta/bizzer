<?php
namespace App\Traits;

use App\Subscription; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait substrait{
	public function store(){

		$a=[];
		$data = $this->insertcontrol();
		$a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('subscriptions')->Insert($replace);
        Session::flash('success');
        return redirect('/');

	}

	public function view(){
			$services = DB::table('subscriptions')->get()->all();
    	$er = Subscription::all();
    	return view('cd-admin.subscription.viewsubscription',compact('services','er'));	
	}


	public function insertcontrol()
	{
  		$data =  Request()->validate([
    	'email' => 'required',
    	
		]);
		
  		return $data;
	}


	public function delete($id){

      DB::table('subscriptions')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/subscription-view');
	}



}
?>	