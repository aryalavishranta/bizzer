<?php
namespace App\Traits;

use App\Whyus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait whyustrait
{
	public function add(){
		return view('cd-admin.whyus.addwhyus');
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('whyuses')->Insert($replace);
        Session::flash('success');
        return redirect('/whyus-view');
	}

	public function view(){
		$services = DB::table('whyuses')->get()->all();
    	$er = Whyus::all();
    	return view('cd-admin.whyus.whyus',compact('services','er'));	
	}

	public function updatewhyus($id){
		$data = $this->insertcontrol();
		$a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
        DB::table('whyuses')->where('id',$id)->update($replace);
   		 Session::flash('updatesuccess');
   		 return redirect('/whyus-view');

	}

	public function statusupdate($id){
		$a = [];
        $test = DB::table('whyuses')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('whyuses')->where('id',$id)->update($a);
        return redirect('/whyus-view');
	}
	public function delete($id){
		 DB::table('whyuses')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/whyus-view');
	}


	public function insertcontrol(){
		$data =  Request()->validate([
    	'point' => 'required',
    	'status' => 'required',
		]);
  		return $data;
	}




}
?>
