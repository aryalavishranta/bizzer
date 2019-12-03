@extends('cd-admin.home-master')
@section('page-title')  
About Details
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="container-fluid">
  
  <section class="content-header">
    <h1>
      About
    </h1>
   <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">View About</li>
      </ol>
  </section>
  @if(Session::has('updatesuccess'))
        <div class="alert alert-info alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Data Updated Successfully</strong>
          {{Session::get("message", '')}}
        </div>
        @endif

  <!-- Main content -->
    <section class="content">
    	<div>
    
   <a class="btn btn-info pull-right" href="{{url('/editabout')}}"><i class="fa fa-edit">
                    </i></a>
                     </div>
       <div class="row">

        <div class="col-md-12">
            <center> <img src="{{url('/imageupload/'.$about->image)}}" style="height:500px;"></p></center>
          
          </div>
          <strong>Company Tagline : </strong>{{$about->tagline}}
            <div class="col-sm-7 sm-margin-b-50">
            <div class="margin-b-30">
                <p style="text-align:justify;">{!!$about->description!!}</p>
            </div>
        </div>
        

      </div>
  </section>
  
  </div>
</div>




       
@endsection