@extends('admin.body.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add department</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('department.store') }}" method="POST">
                        @csrf
					   
                            {{-- @livewire('country-state-city', ['selectedCity' => 1]) --}}
                        
                        <div class="row"> <!--  Start row -->  
                            
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>University Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="university_id" id="select" required="" class="form-control">
                                            <option value="" selected="" disabled="" >Select University</option>
											
											@foreach ($universities as $university)
											<option value="{{ $university->id }}">{{ $university->name }}</option>
											@endforeach
											<option value="" ><a href="#">Create University</a></option>
                                        </select>
                                    
                                    </div>		
                                </div>
                            </div>    
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Faculty Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="faculty_id" id="select" required="" class="form-control">
                                            <option value="" selected="" disabled="" >Select Faculty</option>
											
											@foreach ($faculties as $faculty)
											<option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
											@endforeach
											<option value="" ><a href="#">Create Faculty</a></option>
                                        </select>
                                    
                                    </div>		
                                </div>
                            </div>      
                            <div class="col-md-3">		
                                <div class="form-group">
                                    <h5>department Name <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="name" class="form-control" required=""/> 
                                    </div>
                                </div>
                            </div>                 
                            <div class="col-md-3">
                                <div class="form-group">
                                    <h5>Address <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="address_id" id="select" required="" class="form-control">
                                            <option value="" selected="" disabled="" >Select Address</option>
											
											@foreach ($addresses as $address)
											<option value="{{ $address->id }}">{{ $address->country->name.', '.$address->state->name.', '.$address->city->name }}</option>
											@endforeach
											<option value="" ><a href="#">Create Address</a></option>
                                        </select>
                                    
                                    </div>		
                                </div>
                            </div>                        
                        </div>  <!-- End Row -->
						<div class="text-xs-right">
                            <input type="submit" class="btn btn-info btn-rounded mb-5" value="submit"/>
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
