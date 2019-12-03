<?php
namespace App\Traits;

use App\DMail;
Use Auth;
use App\Mail\QuickMail; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;

trait dashboardtrait
{
	public function home(){
       
        $ser = DB::table('services')->where('status','active')->get()->all();
        $service = count($ser);
        $pa = DB::table('packages')->where('status','active')->get()->all();
        $package = count($pa);
        $fea = DB::table('features')->where('status','active')->get()->all();
        $feature = count($fea);
        $port = DB::table('portfolios')->where('status','active')->get()->all();
        $portfolio = count($port);
        
        
		 $mail = DB::table('dmails')->orderBy('id','Desc')->get()->take(5);
    	return view('cd-admin.home.home',compact('mail','service','package','feature','portfolio'));
    }

     public function quickmail(){
   $data = Request()->validate([
    		'email' => 'required|email',
    		'subject'=>'required',
    		'message' => 'required'
    	]);

        $a = [];
        $a['created_at'] = Carbon::now('Asia/Kathmandu');
        $final = array_merge($a,$data);
        DB::table('dmails')->insert($final);
        Mail::to($data['email'])->send(new QuickMail($data));
        Session::flash('success');
	return redirect('/cpanel');
    }

     public function view(){
    	$t =	DB::table('dmails')->orderBy('id', 'DESC')->paginate(10);
    	return view('cd-admin.home.mails',compact('t'));
    }

    public function del($id){
    	 DB::table('dmails')->where('id',$id)->delete();
        Session::flash('deletesuccess');
        return redirect('view-all-mails');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }









}	
?>