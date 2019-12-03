<?php
namespace App\Traits;

use App\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait packagetrait
{
	public function add(){
		return view('cd-admin.package.addpackage');
	}
	public function view(){
		$services = DB::table('packages')->get()->all();
    	$er = Package::all();
    	return view('cd-admin.package.package',compact('services','er'));	
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('packages')->Insert($replace);
        Session::flash('success');
       return redirect('/package-view');
	}

       public function delete($id){
        $test = DB::table('packages')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('packages')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/package-view');
    }   

	public function updatepackage($id){
	$a=[];
	$data = $this->insertcontrol();
	$a['created_at'] =Carbon::now('Asia/Kathmandu');
	$replace = array_replace($data,$a);
     DB::table('packages')->where('id',$id)->update($replace);
        Session::flash('updatesuccess');
        return redirect('/package-view');
    

	}

	public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('packages')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('packages')->where('id',$id)->update($a);
        Session::flash('updatesuccess');
        return redirect('/package-view');
    }
	public function insertcontrol()
	{
  		
  		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
    	'price' => 'required',
    	'status' => 'required',
		]);
  		return $data;
	}





}

?>	