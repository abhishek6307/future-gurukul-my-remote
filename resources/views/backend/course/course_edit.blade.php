@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		  

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Edit Course </h4>
			   
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

  <form method="post" action="{{ route('course-update') }}" >
		 	@csrf
			<input type="hidden" name="id" value="{{ $products->id }}">
					  <div class="row">
	<div class="col-12">	


		<div class="row"> <!-- start 1st row  -->
	

			<div class="col-md-4">

				 <div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select Category</option>
			@foreach($categories as $category)
 <option value="{{ $category->id }}" {{ $category->id == $products->category_id ? 'selected': '' }} >{{ $category->category_name}}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>
				
			</div> <!-- end col md 4 -->


			
		</div> <!-- end 1st row  -->



<div class="row"> <!-- start 2nd row  -->


			<div class="col-md-4">

				 <div class="form-group">
			<h5>Course Name<span class="text-danger">*</span></h5>
			<div class="controls">
	 <input type="text" name="course_name" class="form-control" required="" value="{{ $products->course_name }}">
     @error('course_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>
				
			</div> <!-- end col md 4 -->


			
		</div> <!-- end 2nd row  -->



<div class="row"> <!-- start 3RD row  -->
			<div class="col-md-4">

	  <div class="form-group">
			<h5>Product Code <span class="text-danger">*</span></h5>
			<div class="controls">
  <input type="text" name="course_code" class="form-control" required="" value="{{ $products->course_code }}">
     @error('course_code') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>
				
			</div> <!-- end col md 4 -->



			
		</div> <!-- end 3RD row  -->




		 

 <!-- end 5th row  -->




<div class="row"> <!-- start 6th row  -->



	<div class="col-md-6">

	   	<div class="form-group">
			<h5>Product Selling Price <span class="text-danger">*</span></h5>
			<div class="controls">
  <input type="text" name="selling_price" class="form-control" required="" value="{{ $products->selling_price }}">
     @error('selling_price') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>
				 
				
			</div> <!-- end col md 6 -->


			<div class="col-md-6">

	    <div class="form-group">
			<h5>Product Discount Price <span class="text-danger">*</span></h5>
			<div class="controls">
	 <input type="text" name="discount_price" class="form-control"  required="" value="{{ $products->discount_price }}">
     @error('discount_price') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 		 </div>
		</div>
				
			</div> <!-- end col md 6 --> 
			
		</div> <!-- end 6th row  -->





<div class="row"> <!-- start 7th row  -->
			<div class="col-md-6">

	    <div class="form-group">
			<h5>Short Description <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea name="short_descp" id="textarea" class="form-control" required placeholder="Textarea text">
		{!! $products->short_descp !!}
	</textarea>     
	 		 </div>
		</div>
				
			</div> <!-- end col md 6 -->
	 
			
		</div> <!-- end 7th row  -->

		
		 
		 
	 
<div class="row"> <!-- start 8th row  -->
			<div class="col-md-6">

	    <div class="form-group">
			<h5>Long Description<span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor1" name="long_descp" rows="10" cols="80" required="">
		{!! $products->long_descp !!}
						</textarea>  
	 		 </div>
		</div>
				
			</div> <!-- end col md 6 -->
		 
			
		</div> <!-- end 8th row  -->

	 
	 <hr>
 



						 
						<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Course">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->





	<!-- ///////////////// Start Thambnail Image Update Area ///////// -->

 <section class="content">
 	<div class="row">

<div class="col-md-12">
				<div class="box bt-3 border-info">
				  <div class="box-header">
		 <h4 class="box-title">Course Thambnail Image <strong>Update</strong></h4>
				  </div>

			
		<form method="post" action="{{ route('update-course-thambnail') }}" enctype="multipart/form-data">
        @csrf

     <input type="hidden" name="id" value="{{ $products->id }}">
    <input type="hidden" name="old_img" value="{{ $products->course_thambnail }}">

			<div class="row row-sm">
				 
				<div class="col-md-3">

<div class="card">
  <img src="{{ asset($products->course_thambnail) }}" class="card-img-top" style="height: 130px; width: 280px;">
  <div class="card-body">
     
    <p class="card-text"> 
    	<div class="form-group">
    		<label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
    <input type="file" name="course_thambnail" class="form-control" onChange="mainThamUrl(this)"  >
     <img src="" id="mainThmb">
    	</div> 
    </p>
   
  </div>
</div> 		
				
				</div><!--  end col md 3		 -->	
				 

			</div>			

			<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Image">
		 </div>
<br><br>



		</form>		   





				</div>
			  </div>
 

 		
 	</div> <!-- // end row  -->
 	
 </section>
<!-- ///////////////// End Start Thambnail Image Update Area ///////// -->









	  </div>

 








@endsection