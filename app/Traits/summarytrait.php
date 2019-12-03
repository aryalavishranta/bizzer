<?php
namespace App\Traits;

use App\Summary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait summarytrait
{
	public function add(){
		return view('cd-admin.summary.addsummary');
	}

	public function view(){
		$seo=DB::table('summaries')->get();
        $er = Summary::all();
    	return view('cd-admin.summary.viewsummary',compact('seo','er'));
	}
	public function editsummary($id){
		 $ser = Summary::where('id',$id)->get()->first();
     return view('cd-admin.summary.editsummary',compact('ser'));
	}

	public function update($id){
		$data = $this->updateRequest();
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
        DB::table('summaries')->where('id',$id)->update($replace);
   		Session::flash('updatesuccess');
   		return redirect('/summary-view');
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('summaries')->Insert($replace);
        Session::flash('success');
        return redirect('/summary-view');
	}





		public function insertcontrol(){
		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
		]);
  		return $data;
	}
		
		public function UpdateRequest(){
		$data =  Request()->validate([
    	
    	'description' => 'required',
		]);
  		return $data;
	}	


}
?>

