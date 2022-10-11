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
			  <h4 class="box-title">Add Product </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
		<form method="post" action="{{ route('course-store') }}" enctype="multipart/form-data" >
		 	@csrf
			<div class="row">
			<div class="col-12">	


			<div class="row"> <!-- start 1st row  -->
			

			<div class="col-md-6">

				 <div class="form-group">
	<h5>Category Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select Category</option>
			@foreach($categories as $category)
 <option value="{{ $category->id }}">{{ $category->category_name }}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>

			</div> <!-- end col md 6 -->




				<div class="col-md-6">

				 <div class="form-group">
			<h5>Course Name <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="course_name" class="form-control" required="">
     @error('course_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>

			</div> <!-- end col md 4 -->

		</div> <!-- end 1st row  -->




<div class="row"> <!-- start 3RD row  -->
			<div class="col-md-4">

	  <div class="form-group">
			<h5>Course Code <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="course_code" class="form-control" required="">
     @error('product_code') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>

			</div> <!-- end col md 4 -->



			<div class="col-md-4">

				<div class="form-group">
			<h5>Product Selling Price <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="selling_price" class="form-control" required="">
     @error('selling_price') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>

		</div> <!-- end col md 4 -->


					<div class="col-md-4">

	    <div class="form-group">
			<h5>Product Discount Price <span class="text-danger">*</span></h5>
			<div class="controls">
	 <input type="text" name="discount_price" class="form-control"  required="">
     @error('discount_price') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 		 </div>
		</div>

			</div> <!-- end col md 4 -->

		</div> <!-- end 3RD row  -->








<div class="row"> <!-- start 6th row  -->


			<div class="col-md-6">

	    <div class="form-group">
			<h5>Main Thambnail <span class="text-danger">*</span></h5>
			<div class="controls">
	   <input type="file" name="course_thambnail" class="form-control" onChange="mainThamUrl(this)" required="" >
     @error('product_thambnail') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 <img src="" id="mainThmb">
	 		 </div>
		</div>


			</div> <!-- end col md 4 -->


	<div class="col-md-6">

	    <div class="form-group">
			<h5>Short Description English <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea name="short_descp" id="textarea" class="form-control" required placeholder="Textarea text"></textarea>     
	 		 </div>
		</div>

			</div> <!-- end col md 6 -->

		</div> <!-- end 6th row  -->





<div class="row"> <!-- start 7th row  -->
		

		 	<div class="col-md-12">

	    <div class="form-group">
			<h5>Long Description<span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor1" name="long_descp" rows="10" cols="80" required="">
		Long Description
						</textarea>  
	 		 </div>
		</div>

		</div> <!-- end 7th row  -->


		
	 

		</div> <!-- end 8th row  -->


	 <hr>





						<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Course">
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
	  </div>




    <script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>








@endsection 