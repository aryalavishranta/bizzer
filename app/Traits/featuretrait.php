<?php
namespace App\Traits;

use App\Feature;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait featuretrait
{
	use imagetrait;
	public function addfeature(){
		return view('cd-admin.feature.addfeature');
	}

	 public function view(){
    	$services = DB::table('features')->get()->all();
    	$er = Feature::all();
    	return view('cd-admin.feature.feature',compact('services','er'));
    }

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('features')->Insert($replace);
        Session::flash('success');
        return redirect('/feature-view');
	}
	public function updatefeature($id){
		$data = $this->UpdateRequest();
		 if(isset($img))
        {
         $test = DB::table('features')->where('id',$id)->get()->first();
         if (file_exists('imageupload/'.$test->image)) 
         {
             unlink('imageupload/'.$test->image);
         }
         
         $img = $this->insertimage($data['image']);
         $a['image'] = $test ;
         
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         $data = DB::table('features')->where('id',$id)->update($replace);
    	 }
    	 else
    	 {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         
        DB::table('features')->where('id',$id)->update($replace);
   		 }
   		 Session::flash('updatesuccess');
   		 return redirect('/feature-view');
	}
	

	public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('features')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('features')->where('id',$id)->update($a);
        return redirect('/feature-view');
    }

     public function delete($id){
    	$test = DB::table('features')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('features')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/feature-view');
    }	


	public function insertcontrol()
	{
  		
  		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
    	'image' => 'required|image',
    	'alt' => 'required',
    	'status' => 'required',
		]);
  		return $data;
	}

	public function UpdateRequest(){
		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
    	'image' => '',
    	'alt' => '',
    	'status' => 'required',
		]);
  		return $data;

	}
}
?>	