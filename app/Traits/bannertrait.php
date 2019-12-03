<?php
namespace App\Traits;

use App\Bannerimage;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait bannertrait
{
	use imagetrait;
	public function addcarousel(){
		return view('cd-admin.carousel.addcarousel');
	}

	public function viewcarousel(){
		 $carousel = Bannerimage::all();
        return view('cd-admin.carousel.carousel',compact('carousel'));
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('bannerimages')->Insert($replace);
        Session::flash('success');
        return redirect('/carousel-view');

	}

	public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('bannerimages')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('bannerimages')->where('id',$id)->update($a);
        return redirect('/carousel-view');
    }


    public function delete($id){
    	$test = DB::table('bannerimages')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('bannerimages')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/carousel-view');
    }	
	public function insertcontrol()
	{
  		$request =Request()->all();
  		$data =  Request()->validate([
    	'name' => 'required',
    	'description' => 'required',
    	'image' => 'required|image',
    	'alt' => 'required',
    	'status' => 'required',
		]);
  		return $data;
	}
}
?>	