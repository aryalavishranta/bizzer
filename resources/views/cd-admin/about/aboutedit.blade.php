@extends('cd-admin.home-master')

@section('page-title')  
About Edit Form
@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
  EDIT ABOUT
  </h1>
   
     
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">About</a></li>
        <li class="active">Edit About</li>
      </ol>
    </section>

    <section class="content"> 
<div class="row">
  <div class="col-md-12 box1">
    <div class="box box-default">
      <div class="box-header">
        <h3 class="box-title">Edit About</h3>
      </div>
      <div class="box-body">
        <!-- Date dd/mm/yyyy -->
        <form role="form" method="post" action= "{{url('updateabout')}}" enctype="multipart/form-data">
             {{csrf_field()}}
            <div class="form-group">
                <label for="imgalt">Tagline of company</label>
                <div class="text text-danger">{{$errors->first('tagline')}}</div>
                <input type="text" class="form-control" name="tagline" id="tagline"  value="{{$about->tagline}}">
            </div>
              
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="text text-danger">{{$errors->first('image')}}</div>
                <input type="file" class="form-control" name="image" id="image"  value="{{$about->image}}">
              </div>
              <div class="form-group">
                <label for="imgalt">Alternative Image Text for cover image </label>
                <div class="text text-danger">{{$errors->first('alt')}}</div>
                <input type="text" class="form-control" name="alt" id="alt"  value="{{$about->altimage}}">
            </div>
  

                <div class="form-group">
                <label for="name">Description</label>
                <div class="text text-danger">{{$errors->first('description')}}</div>
                 <textarea name="description" id="summernote" rows="20" cols="80" >
                    {!!$about->description!!}
                  </textarea>
              
              </div>

              

               
       
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Update</button>
          </div>
          <div class="col-md-4"></div>
        </form>
          </form>

      </div>
    </div>
  </div>


</div>



</section>
</div>

      

   





@endsection