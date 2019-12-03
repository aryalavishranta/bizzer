<?php
namespace App\Traits;

use App\Testimonial;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait testimonialtrait
{
	use imagetrait;
	public function add(){
		return view('cd-admin.testimonials.addtestimonial');
	}

	public function view(){
		$re = DB::table('testimonials')->paginate(6);
		$er = Testimonial::all();
		return view('cd-admin.testimonials.testimonial',compact('re','er'));
	}

	public function store(){
		$a=[];
		$data = $this->insertcontrol();
		$test = $this->insertimage($data['image']);
		$a['image'] = $test;
        $a['created_at'] =Carbon::now('Asia/Kathmandu');
        $replace = array_replace($data,$a);
        DB::table('testimonials')->Insert($replace);
        Session::flash('success');
        return redirect('/testimonial-view');
	}

	public function updatetestimonial($id){
		$data = $this->UpdateRequest();
		 if(isset($img))
        {
         $test = DB::table('testimonials')->where('id',$id)->get()->first();
         if (file_exists('imageupload/'.$test->image)) 
         {
             unlink('imageupload/'.$test->image);
         }
         
         $img = $this->insertimage($data['image']);
         $a['image'] = $test ;
         
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
         $data = DB::table('testimonials')->where('id',$id)->update($replace);
    	 }
    	 else
    	 {
         $a['updated_at'] =Carbon::now('Asia/Kathmandu');
         $replace = array_replace($data,$a);
        DB::table('testimonials')->where('id',$id)->update($replace);
   		 }
   		 Session::flash('updatesuccess');
   		 return redirect('/testimonial-view');
	}
	public function statusupdate($id)
    {
        $a = [];
        $test = DB::table('testimonials')->where('id',$id)->get()->first();
        if($test->status=='active')
        {
            $a['status'] = 'inactive';
        }
        else
        {
            $a['status'] = 'active'; 
        }
        DB::table('testimonials')->where('id',$id)->update($a);
        return redirect('/testimonial-view');
    }

     public function delete($id){
    	$test = DB::table('testimonials')->where('id',$id)->get()->first();
      if (file_exists('imageupload/'.$test->image)) 
      {
        unlink('imageupload/'.$test->image);
       }
      DB::table('testimonials')->where('id',$id)->delete();
      Session::flash('deletesuccess');
      return redirect('/testimonial-view');
    }	




	public function insertcontrol(){

  		$data =  Request()->validate([
    	'name' => 'required',
    	'address'=>'required',
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
    	'address'=>'required',
    	'description' => 'required',
    	'image' => '',
    	'alt' => 'required',
    	'status' => 'required',
		]);
  		return $data;

	}
}
?>	