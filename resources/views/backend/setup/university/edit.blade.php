@extends('admin.body.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

      

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update University</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('university.update', $data->id) }}" method="POST">
                        @csrf
                                                
                        <div class="row"> <!--  Start row -->  
                            <div class="col-md-6">		
                                <div class="form-group">
                                    <h5>Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" value="{{ $data->name }}"/> 
                                    </div>
                                </div>
                            </div>    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Address <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="address_id" id="select" required="" class="form-control">
                                            <option value="" selected="" disabled="" >Select Address</option>
											
											@foreach ($addresses as $address)
											<option value="{{ $address->id }}">{{ $address->country->name.', '.$address->state->name.', '.$address->city->name }}</option>
											@endforeach
											<option value="" >Create Address</option>
                                        </select>
                                    
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
@endsection
