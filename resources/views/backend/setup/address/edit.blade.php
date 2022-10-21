@extends('admin.body.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">

      

		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Address</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form action="{{ route('address.update', $data->id) }}" method="POST">
                        @csrf
                        
                            @livewire('country-state-city', ['selectedCity' => '{{ $data->city_id }}' ])
                        
                        <div class="row"> <!--  Start row -->  
                            <div class="col-md-4">		
                                <div class="form-group">
                                    <h5>Quarter <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="quarter" class="form-control" value="{{ $data->quarter }}"/> 
                                    </div>
                                </div>
                            </div>    
                            <div class="col-md-4">		
                                <div class="form-group">
                                    <h5>Street <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="street" class="form-control" value="{{ $data->street }}"/> 
                                    </div>
                                </div>
                            </div>             
                                     
                            <div class="col-md-4">		
                                <div class="form-group">
                                    <h5>Comment <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="comment" class="form-control" value="{{ $data->comment }}"/> 
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
