@extends('cd-admin.home-master')

@section('page-title')  
Edit Summary
@endsection

@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h1>
  Edit Summary
  </h1>   

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Summary</a></li>
        <li class="active">Edit Summary</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
      
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Summary</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action= "{{url('/updatesummary/'.$ser['id'])}}" method="post">
               
             {{csrf_field()}}
              <div class="box-body">
                 <div class="form-group">
                  
                  <label for="name">Page Name :</label>
                  {{$ser->name}}
                  
                
              <div class="form-group">
                  <label for="name">Summary</label>
                  <div class="text text-danger">{{$errors->first('description')}}</div>
                  <textarea class="form-control" name="description"  id="des" placeholder="Enter Summary" >{{$ser['description']}}
                </textarea>
                </div>
             

               

              </div>
              
                <button type="submit" class="btn btn-info pull-right">Submit</button>
                
               

    
    <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
            </form>
    
             
            
          </div>
          <!-- /.box -->
      </div>
      
  </div>
</section>



</div>
       
@endsection