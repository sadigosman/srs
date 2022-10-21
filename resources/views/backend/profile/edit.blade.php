@extends('admin.body.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 

<div class="content-wrapper">
    <div class="container-full">

      <!-- Main content -->
      <div class="container-full">
		
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Manage User Profile</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data"> {{--  --}}
                        @csrf
					    
                        <div class="row"> <!--  Start row -->  
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>User Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" value="{{ $data->name }}"/> 
                                    </div>
                                </div>
                            </div>   
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>Email <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" value="{{ $data->email }}"/> 
                                    </div>
                                </div>
                            </div>                                               
                        </div>  <!-- End Row -->

                        <div class="row"> <!--  Start row -->  
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>Mobile <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="mobile" class="form-control" value="{{ $data->mobile }}"/> 
                                    </div>
                                </div>
                            </div>   
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>Address <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="address" class="form-control" value="{{ $data->address }}"/> 
                                    </div>
                                </div>
                            </div>                                               
                        </div>  <!-- End Row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Sex <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="sex" id="sex"  class="form-control">
                                            <option value="" selected="" disabled="" >Select Sex</option>
                                            <option value="Male" {{ ($data->sex === "Male" ? "selected" :"") }} >Male</option>
                                            <option value="Female" {{ ($data->sex === "Female" ? "selected" :"") }}>Female</option>
                                        </select>
                                    
                                    </div>		
                                </div>	
                            </div>	  
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>Image <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="image" id="image" class="form-control" /> 
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <img id="showImage" src="{{ 
                                                (!empty($user->applicant->image))?
                                                url('uploads/user_image/'.$user->image):
                                                url('uploads/no_image.jpg'); }}" alt="" style="width: 100px; height: 100px; border: 1px solid #000000">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  <!-- End Row -->
						<div class="text-xs-right">
							
                            <input type="submit" class="btn btn-info btn-rounded mb-5" value="Update"/>
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
      <!-- /.content -->
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection
