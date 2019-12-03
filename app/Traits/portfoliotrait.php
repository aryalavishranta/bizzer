<?php
namespace App\Traits;

use App\Portfolio;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait portfoliotrait
{
	use imagetrait;
	public function add(){
		return view('cd-admin.portfolio.addportfolio');
	}

	public function view(){
		 $port = Portfolio::all();
        return view('cd-admin.portfolio.portfolio',compact('port'));
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('portfolios')->Insert($replace);
        Session::flash('success');
        return redirect('/portfolio-view');

	}

	public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('portfolios')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('portfolios')->where('id',$id)->update($a);
        return redirect('/portfolio-view');
    }


    public function delete($id){
    	$test = DB::table('portfolios')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('portfolios')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/portfolio-view');
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