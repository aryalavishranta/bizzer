@extends('cd-admin.home-master')

@section('page-title')  
Add Summary
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>ADD Summary</h1>
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Summary</a></li>
        <li class="active">ADD Summary</li>
      </ol>
    </section>


<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary" style="margin-top: 20px">
            <div class="box-header with-border">
            <h3 class="box-title">Add Summary </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form action= "{{url('summarystore')}}"  method="post">
              {{csrf_field()}}
              <div class="box-body">
                 <div class="form-group">
                  
                  <label for="name">Choose Title Page </label>
                  <div class="text text-danger">{{$errors->first('name')}}</div>
                  <select class="form-control" name="name" value="{{old('name')}}">
                    
                    <option value="service">Service</option>
                    <option value="portfolio">Portfolio</option>
                    <option value="package">Package</option>
                    <option value="whyus">Why us ?</option>
                    <option value="testimonial">Testimonial</option>
                    <option value="feature">Feature</option>
                    <option value="subscription">Subscription</option>
                    <option value="contact">Conatct</option>
                  </select>
                  
                  
                
                </div>
                
              <div class="form-group">
                  <label for="name">Summary</label>
                  <div class="text text-danger">{{$errors->first('description')}}</div>
                  <textarea class="form-control" name="description"  id="des" placeholder="Enter Summary" value="{{old('description')}}">
                </textarea>
                </div>
             

               

              </div>
              <div class="box-footer" >
                <button type="submit" class="btn btn-success pull-right">Submit</button>
                <a href="{{URL()->Previous()}}" class="btn btn-danger">Cancel</a>
               </div>

    
            </form>
          </div>
          <!-- /.box -->
      </div>
  </div>
</section>



</div>
       
@endsection