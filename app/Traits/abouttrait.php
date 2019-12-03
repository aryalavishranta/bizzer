<?php
namespace App\Traits;

use App\About;
use App\Traits\imagetrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait abouttrait
{
	use imagetrait;
	public function addabout(){

    	return view('cd-admin.about.aboutform');
    }
    public function view(){
    	$about = DB::table('abouts')->get()->first();
    	return view('cd-admin.about.aboutshow',compact('about'));

    }

    public function editabout(){
    	$about = DB::table('abouts')->get()->first();
    	return view('cd-admin.about.aboutedit',compact('about'));
    }

	public function store(){
 		$request = Request()->all();
        $v = $this->validateRequest();
        $about = new About;
         $img = $this->insertimage($request['image']);
        $about['image']= $img;
        $about['altimage']=$request['alt'];
         
        $about['tagline']=$request['tagline'];
        
        $about['description']=$request['description'];
       $about->save();
       return redirect('/abouts-view');
    }

    public function validateRequest(){
        return Request()->validate([
            'alt' => 'required',
            'image' => 'required|image',
          	'tagline'=>'required',
			'description'=>'required',            
        ]);
    }

    public function updateabout(){
    $abouts = DB::table('abouts')->get()->first();
    $a = [];
    $a['updated_at']=Carbon::now('Asia/Kathmandu');
    $data = $this->UpdateRequest();
    if(isset($image))
    {
        if (file_exists('imageupload/'.$abouts->image)) 
        {
            unlink('imageupload/'.$abouts->image);
        }
        $img = $this->insertimage($data['image']);
        $a['image'] = $img;        
        $final = array_merge($data,$a);
        $abouts = DB::table('abouts')->Update($final);
    }
	else
    {
         $final = array_merge($data,$a);
        $abouts=DB::table('abouts')->Update($final);
    }
    Session::flash('updatesuccess');
    return redirect()->to('/abouts-view');


    }


    public function UpdateRequest(){
        return Request()->validate([
            'altimage' => '',
            'image' => '',
          	'tagline'=>'required',
			'description'=>'required',            
        ]);
    }

}









?>